<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS - 404</title>
  <!-- //TODO: Modificar noindex en prod -->
  <meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body class="dp-library body-404">
	<div class="dp-container-fluid">
		<a href="index.php#inicio"><img src="img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS" id="logo-emms-404"></a>
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
				<button type="button" class="dp-button" id="error-404-btn" onclick="window.location.href='index.php'">
					VOLVER AL EMMS2021
				</button>
			</div>
		</div>

	</div>

</body>

</html>