<!DOCTYPE html>
<html>

<head>
	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<title>Doppler EMMS21 Admin</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<link rel="stylesheet" href="css/admin.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./../img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./../img/favicon-16x16.png">
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
		$settings = $db->query('SELECT * FROM settings ORDER BY id DESC LIMIT 1')->fetchArray();
		$simulator = $db->query('SELECT * FROM simulator')->fetchArray();
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
				<div class="col-sm-12 col-md-3 admin-container">
					<div class="instance-container simulator" id="id-simulator">
						<form action="simulator.php" method="POST" class="form">
							<div class="wrapper">
								<h2>Simulador para Testing</h2>
								<div class="form-group">
									<label>Habilitar Simulador</label>
									<input type="checkbox" id="enabled" name="enabled" value="true" <?= ($simulator['enabled'] === 1) ? "checked" : "" ?> />
								</div>
								<div class="form-group">
									<label>PreEvento</label>
									<input type="radio" name="eventStatus" value="preevento" <?= ($simulator['eventStatus'] == "preevento") ? "checked" : "" ?>>
								</div>
								<div class="form-group">
									<label>During</label>
									<input type="radio" name="eventStatus" value="during" <?= ($simulator['eventStatus'] == "during") ? "checked" : "" ?>>
								</div>
								<div class="form-group">
									<label>PostEvento</label>
									<input type="radio" name="eventStatus" value="postinicial" <?= ($simulator['eventStatus'] == "postinicial") ? "checked" : "" ?>>
								</div>
								<div class="form-group">
									<label class="ip">IP</label>
									<input type="text" id="ip" name="ip" value="<?= $simulator['ip'] ?>" placeholder="Ip de la persona que usa el simulador" />
								</div>
								<button type="submit" class="btn-send noselect">Publicar</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 admin-container">
					<h1>ADMIN EMMS</h1>
					<img src="img/iso-doppler.gif" alt="Doppler" class="logoD">
					<div class="instance-container">
						<div>
							<form method="POST" class="form">
								<div class="wrapper">
									<h2>Produccion - Ojo</h2>
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
				</div>
				<div class="col-sm-12 col-md-3 admin-container">
					<div class="instance-container" id="id-setting">
						<form action="settings.php" method="POST" class="form">
							<div class="wrapper">
								<h2>Live Transmision</h2>
								<label>Id Youtube</label>
								<input type="text" id="youtube" name="youtube" value="<?= $settings['youtube'] ?>" placeholder="ej. 7EmboKQH8lM" />

								<label>Channel Twitch</label>
								<input type="text" id="twitch" name="twitch" value="<?= $settings['twitch'] ?>" placeholder="ej. duckvilleusa" />

								<label>Problemas tecnicos</label>

								<input type="checkbox" id="tecnicos" name="tecnicos" value="false" <?= ($settings['fallas_tecnicas'] === 1) ? "checked" : "" ?> />

								<br />
								<br />
								<button type="submit" class="btn-send noselect">Publicar</button>
							</div>
						</form>
					</div>
				</div>

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