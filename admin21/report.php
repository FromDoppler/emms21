<!DOCTYPE html>
<html>

<head>
	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<title>Doppler EMMS21 Admin</title>
	<link rel="stylesheet" href="css/admin.css">
	<style>
		.container {
			margin: 40px;
		}

		.left {
			float: left;
			margin-right: 50px;
		}
	</style>
</head>

<body class="dp-library">
	<?php
	require_once('./../config.php');
	require_once('./../services/utils/ipAddress.php');

	if (isVPNUserAdmin()) {
	?>
		<div class="dp-container" id="repo">
			<div class="dp-rowflex">
				<div class="col-sm-0 col-md-2"></div>
				<div class="col-sm-12 col-md-8 admin-container">
					<h1>EMMS21 ADMIN - Registrados</h1>
					<img src="img/iso-doppler.gif" alt="Doppler" class="logoD">
					<div class="report-container">
								<?php

				include "./../db.php";
				$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

				$result = $db->query('SELECT pais, medium_utm, count(*) as total FROM registrados GROUP BY pais, medium_utm');
				$registrados = $result->fetchAll();

				$paises = [];
				$total_registrados = 0;
				foreach ($registrados as $key => $registrado) {
					$paises[$registrado['pais']] = empty($paises[$registrado['pais']]) ? 0 : $paises[$registrado['pais']];
					$paises[$registrado['pais']] += $registrado['total'];
					$total_registrados += $registrado['total'];
				}

				$pais = '';
				$primer_loop = true;

				if (!$registrados) {
					echo '<h3>No hay usuarios registrados.</h3>';
				}

        if ($registrados) {
          echo '<br><a class="btn btn-sm" style="color: white; background-color: var(--h1-emms);" 
                href="/admin21/Registrados.php">Descargar Registrados.csv</a><br /><br />';
        }

				echo '<h3>Total registrados: ' . $total_registrados . '</h3>';

				echo '<ul>';
				foreach ($registrados as $key => $registrado) {

					if ($pais !== $registrado['pais']) { // Encabezado
						$pais = $registrado['pais'];

						if (!$primer_loop) {
							echo '</ul>';
							echo '</li>';
						}

						echo '<li>';
						echo '<div class="country">' . $registrado['pais'] . ': ' . $paises[$registrado['pais']] . '</div>';

						echo '<ul>';
					}

					$medium_utm = empty($registrado['medium_utm']) ? 'Sin Parametro' : $registrado['medium_utm'];
					echo '<li class="utm">' . $medium_utm . ': ' . $registrado['total'];
					$primer_loop = false;
				}
				echo '</ul>';
				?>
					</div>
				</div>
				<div class="col-sm-0 col-md-2"></div>
			</div>
		</div>
	<?php
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
