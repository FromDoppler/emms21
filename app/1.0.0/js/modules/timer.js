export const countDown = () => {

	const countDownDate =localStorage.endTimePre;

	let x = setInterval(function () {
		const spanDay = document.getElementById('day');
		const spanHour = document.getElementById('hour');
		const spanMinute = document.getElementById('minute');

		if (spanDay != null && spanHour != null && spanMinute != null) {

			let now = new Date().getTime();
			let distance = countDownDate - now;
			let days = Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));


			spanDay.innerHTML = days;
			spanHour.innerHTML = hours;
			spanMinute.innerHTML = minutes;



			checkClienWidth(spanDay, 'd');
			checkClienWidth(spanHour, 'h');
			checkClienWidth(spanMinute, 'm');

			if (distance < 0) {
				// TODO: Cambiar en base a un nuevo planteo de diseño y contenido
				clearInterval(x);
				document.getElementById("emmsEnd").innerHTML = "TERMINO";
				spanDay.innerHTML = '-';
				spanHour.innerHTML = '-';
				spanMinute.innerHTML = '-';
			}
		}
	}, 1000);


	// Esta funcion detecta el width de los elementos 
	// para estimar la cantidad de digitos y asi asignar un clase.
	// No se puede abstraer más dado que las clases varian.
	function checkClienWidth(element, type) {

		const widthValue = 20;

		if (element.clientWidth >= widthValue && type === 'd') {
			element.classList.add('dayLeft');
		} else {
			element.classList.remove('dayLeft');
		}

		if (element.clientWidth >= widthValue && type === 'h') {
			element.classList.add('hourLeft');
		} else {
			element.classList.remove('hourLeft');
		}


		if (element.clientWidth >= widthValue && type === 'm') {
			element.classList.add('minuteLeft');
		} else {
			element.classList.remove('minuteLeft');
		}


	}
}