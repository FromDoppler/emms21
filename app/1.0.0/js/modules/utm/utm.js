


document.addEventListener('DOMContentLoaded', () => {

	let target = '';
	// selecciona el nodo 
	if (window.location.pathname.includes('.php') && !(window.location.pathname.includes('index.php')) ) {
		target = document.querySelector('#body');
		getUtms();
	} else {
		target = document.querySelector('#current-state');
	}
	// Crea una instancia de observer
	let observer = new MutationObserver(function (mutations) {
		// if (cont < 10 || (window.location.pathname).includes('ediciones-anteriores.php')) {
		getUtms();
	});

	// Configura el observer:
	let config = { attributes: true, childList: true, characterData: true };

	// pasa al observer el nodo y la configuracion
	observer.observe(target, config);

});

function getUtms() {

	setTimeout(function () {
		(function () {
			var domainsToDecorate = [
				'goemms.com'
			],
				queryParams = [
					'gclid',
					'utm_term',
					'utm_medium', //add or remove query parameters you want to transfer
					'utm_source',
					'utm_content',
					'utm_campaign',
					'origin_inbound'
				]

			// do not edit anything below this line
			var links = document.querySelectorAll('a');
			// check if links contain domain from the domainsToDecorate array and then decorates
			for (var linkIndex = 0; linkIndex < links.length; linkIndex++) {
				for (var domainIndex = 0; domainIndex < domainsToDecorate.length; domainIndex++) {
					var newUrl = links[linkIndex].href;
					if (((newUrl.indexOf(domainsToDecorate[domainIndex]) > -1) || newUrl.includes('fromdoppler') || newUrl.includes('.php')) && !(newUrl.includes("mailto")) && !(newUrl.includes("utm"))) {
						newUrl = decorateUrl(newUrl);
						if (newUrl)
							links[linkIndex].href = newUrl;
					}
				}
			}
			// decorates the URL with query params
			function decorateUrl(urlToDecorate) {
				//vamos a verificar si el link tiene almohadilla
				var theHash = "";
				if (urlToDecorate.includes("#")) {
					hashSeparator = urlToDecorate.split('#');
					theHash = '#' + hashSeparator[1];
					urlToDecorate = hashSeparator[0];
				}
				var url = new URL(urlToDecorate);
				var params = new URLSearchParams(url.search);

				var collectedQueryParams = []; //este arreglo se carga con los parametros que llegan por url.location que coinciden con los utms declarados mas arriba
				for (var queryIndex = 0; queryIndex < queryParams.length; queryIndex++) {
					if (getQueryParam(queryParams[queryIndex])) {
						params.delete(queryParams[queryIndex]); //Evita duplicados. Si el param estaba en el link lo borra. Prevalecera el parm del currentLocation.
						collectedQueryParams.push(queryParams[queryIndex] + '=' + getQueryParam(queryParams[queryIndex]))
					}
				}


				if (collectedQueryParams.length) { //si hay parametros de tipo utm en la url.location
					params = (params.toString().length) ? '&' + params.toString() : '';
					var completeUrl = url.origin + url.pathname + '?' + collectedQueryParams.join('&') + params + theHash;
				} else {//si no hay parametros verifico si hay referido
					params = (params.toString().length) ? params.toString() : '';
					var domainReferrer = (document.referrer) ? new URL(document.referrer) : "";
					var hostnameRefer = (domainReferrer && !(domainReferrer.hostname).includes("goemms")) ? domainReferrer.hostname : "direct";
					var completeUrl = url.origin + url.pathname + '?utm_source=' + hostnameRefer + ((params.length) ? '&' + params : '') + theHash;
				}
				completeUrl = completeUrl.replaceAll("%20", '+'); //fix en params que contienen signo mas
				completeUrl = completeUrl.replaceAll("%3A", ':'); //fix en params que contienen dos puntos
				completeUrl = completeUrl.replaceAll("%2F", '/'); //fix en params que contienen slash
				return completeUrl;
			}

			// borrowed from https://stackoverflow.com/questions/831030/
			// a function that retrieves the value of a query parameter
			function getQueryParam(name) {
				var urlLocationParams = window.location.search;
				if (urlLocationParams.includes("#")) {
					var hashSeparator = urlLocationParams.split('#');
					urlLocationParams = hashSeparator[0];
				}
				if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(urlLocationParams))
					return decodeURIComponent(name[1]);
			}

		})();
		// }
	}, 500);
}