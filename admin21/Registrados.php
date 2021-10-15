<?php
	require_once('./../config.php');
	require_once('./../services/utils/ipAddress.php');

	if (isVPNUserAdmin()) {
        include "./../db.php";
        $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        $result = $db->query('SELECT 
            nombre, 
            apellido, 
            email, 
            pais, 
            telefono, 
            empresa, 
            invito_dos_personas
        FROM registrados');

        $registrados = $result->fetchAll();

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=Registrados.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('Nombre', 'Apellido', 'Email', 'País', 'Teléfono', 'Empresa', 'Invitó colegas'));

        if (count($registrados) > 0) {
            foreach ($registrados as $row) {
                fputcsv($output, $row);
            }
        }
        exit(0);
	} else {
	?>
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

	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>

</body>

</html>
<?PHP
    }
