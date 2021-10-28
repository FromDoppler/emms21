<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS 2021: 404</title>

	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta property="og:image" content="https://i.imgur.com/GrG726A.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/GrG726A.png">
	<meta name="twitter:image:alt" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<link rel="canonical" href="https://goemms.com/" />
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-M768WZR');
	</script>
	<!-- End Google Tag Manager -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">

	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css">
	<link rel="stylesheet" type="text/css" href="/app/<?= VERSION ?>/css/styles.css?version=<?= VERSION ?>">

</head>

<body class="dp-library body-404">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="dp-container-fluid">
		<a href="index.php#inicio"><img src="/img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS" id="logo-emms-404"></a>
	</div>
	<div class="dp-container">

		<div class="dp-rowflex">
			<div class="error-404-container col-md-12">
				<div class="error-404">
				</div>
			</div>
			<div class="col-md-12 error-404-message">
				<p>¿Te has perdido? Lo que no puedes perderte es el evento exclusivo que estamos preparando para ti.
				</p>
				<button type="button" class="dp-button" id="error-404-btn" onclick="window.location.href='/index.php'">
					VOLVER A EMMS2021
				</button>
			</div>
		</div>

	</div>
</body>

</html>