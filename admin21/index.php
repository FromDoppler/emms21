<!DOCTYPE html>
<html>

<head>
	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<title>Doppler EMMS21 Admin</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<link rel="stylesheet" href="css/admin.css">
</head>

<body class="dp-library">
	<?PHP
	require_once('./../config.php');
	require_once('./../services/utils/ipAddress.php');

	if (isVPNUserAdmin()) {

		include "./../db.php";

		$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$insert = $db->query('INSERT INTO admin21 (eventStatus) VALUES (?)', $_POST['eventStatus']);
	?>
			<div class="dp-wrap-message dp-wrap-success fadeInUp">
				<span class="dp-message-icon"></span>
				<div class="dp-content-message">
					<p>Cambios guardados con éxito.</p>
				</div>
			</div>
		<?PHP
		}

		$data = $db->query('SELECT * FROM admin21 ORDER BY id DESC LIMIT 1')->fetchArray();
		?>
		<a href="report.php" class="float">
			<div class="dp-tooltip-container">
				<img src="img/report.png" alt="Icono de reporte" class="img-report">
				<div class="dp-tooltip-top">
					<span>Click para ir a reportes</span>
				</div>
			</div>
		</a>

		<div class="dp-container">
			<div class="dp-rowflex">
				<div class="col-sm-0 col-md-2"></div>
				<div class="col-sm-12 col-md-8 admin-container">
					<h1>ADMIN EMMS</h1>
					<img src="img/iso-doppler.gif" alt="Doppler" class="logoD">
					<div class="instance-container">
						<form method="POST" class="form">
							<div class="wrapper">
								<input type="radio" id="option-1" name="eventStatus" value="preevento" <?= ($data['eventStatus'] == "preevento") ? "checked" : "" ?>>
								<input type="radio" id="option-2" name="eventStatus" value="during" <?= ($data['eventStatus'] == "during") ? "checked" : "" ?>>
								<input type="radio" id="option-3" name="eventStatus" value="postinicial" <?= ($data['eventStatus'] == "postinicial") ? "checked" : "" ?>>
								<label for="option-1" class="option option-1">
									<div class="dot"></div>
									<span>Pre Evento</span>
								</label>
								<label for="option-2" class="option option-2">
									<div class="dot"></div>
									<span>During LIVE</span>
								</label>
								<label for="option-3" class="option option-3">
									<div class="dot"></div>
									<span>Post Dia Inicial</span>
								</label>
								<button type="submit" class="btn-send noselect">Publicar</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-0 col-md-2"></div>
			</div>
		</div>
	<?PHP
	} else {
	?>
		<div class="hover">
			<div class="background">
				<h4>No tienes permisos <br> para entrar aqui!.</h4>
				<div class="door">EMMS ADMIN</div>
				<div class="rug"></div>
			</div>
			<div class="foreground">
				<div class="bouncer">
					<div class="head">
						<div class="neck"></div>
						<div class="eye left"></div>
						<div class="eye right"></div>
						<div class="ear"></div>
					</div>
					<div class="body"></div>
					<div class="arm"></div>
				</div>
				<div class="poles">
					<div class="pole left"></div>
					<div class="pole right"></div>
					<div class="rope"></div>
				</div>
			</div>
		</div>
	<?PHP
	}
	?>

	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
</body>

</html>