<?php
require_once('config.php');
require_once('SecurityHelper.php');
include "db.php";

if(count($_POST)==0){
	header('Location: /demo-day/');
exit;
}
$ip = getIpAddress();
if(in_array($ip,$allow_ips) || !SecurityHelper::maximumSubmissionsCount()) {
	
	$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
	$data = $db->query('SELECT * FROM demo_day ORDER BY id DESC LIMIT 1')->fetchArray();
	$meta_robots = (PRODUCTION) ? '<meta name="robots" content="index, follow">' : '<meta name="robots" content="noindex, nofollow">';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$firstname = isset($_POST['name']) ? $_POST['name'] : '';
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$country = isset($_POST['country']) ? $_POST['country'] : '';
	$phone = isset($_POST['phone-input']) ? $_POST['phone-input'] : '';
	$type_demo = isset($_POST['Tipo_DemoDay']) ? $_POST['Tipo_DemoDay'] : '';
	$privacy = isset($_POST['Acepto_la_Política_de_Privacidad_de_Doppler']) ? $_POST['Acepto_la_Política_de_Privacidad_de_Doppler'] : '';
	$promotions = isset($_POST['Acepto_recibir_promociones_de_Doppler_y_sus_aliados']) ? $_POST['Acepto_recibir_promociones_de_Doppler_y_sus_aliados'] : '';
	$utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : '';
	$utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '';
	$utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '';
	$utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : '';
	$utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : '';
	$origin = isset($_POST['origin']) ? $_POST['origin'] : '';
	$country = isset($_POST['country']) ? $_POST['country'] : '';

	if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($firstname) || empty($lastname) || empty($phone) || empty($country) || empty($type_demo) || empty($privacy)) {
			die("data incorrect");
		}
	date_default_timezone_set('America/Argentina/Buenos_Aires');	
	$array = array(
		'politica_c' => $privacy,
		'promociones_c' => $promotions,
		'email' => $email,
		'tipo_demoday' => $type_demo,
		'nombre' => $firstname,
		'apellido' => $lastname,
		'telefono' => $phone,
		'pais' => $country,
		'utm_source' => $utm_source,
		'utm_campaign' => $utm_campaign,
		'utm_medium' => $utm_medium,
		'utm_content' => $utm_content,
		'utm_term' => $utm_term,
		'date_registration'=> date("Y-m-d H:i:s")
	);

		$url = $data['zappierUrl'];
		// Create a new cURL resource
		$ch = curl_init($url);
		$array_json = json_encode($array);
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $array_json);
		// Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result = curl_exec($ch);
		// Close cURL resource
		curl_close($ch);

		SecurityHelper::incrementSubmissions();
}
else{
	//si excede la maxima cantidad de submisions redirige a la home
	header('Location: /demo-day/');
}	

//respuesta correcta a la reserva

//boton de crear cuenta 

//si no tiene cuenta lo manda a create_account
//si tiene cuenta lo deja aca y le dice que ya tiene cuenta

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crea tu cuenta | Doppler Demo Day</title>
  <?=$meta_robots?>
	<link rel="stylesheet" href="css/styles.css?version=<?=VERSION?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css?version=<?=VERSION?>">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js?version=<?=VERSION?>"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css?version=<?=VERSION?>">
	<meta name="title" content="Crea tu cuenta | Doppler Demo Day">
	<meta name="description" content="¿Aún no tienes tu cuenta? ¡Créala gratis! Disfruta de los beneficios del Email & Automation Marketing.">
	<meta name="keywords" content="">
	<meta property="og:title" content="Crea tu cuenta | Doppler Demo Day">
	<meta property="og:description" content="¿Aún no tienes tu cuenta? ¡Créala gratis! Disfruta de los beneficios del Email & Automation Marketing.">
	<meta property="og:image" content="https://i.imgur.com/CtEeGOI.png">
	<meta property="og:url" content="https://www.fromdoppler.com/demo-day">
	<meta property="og:site_name" content="Crea tu cuenta | Doppler Demo Day">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/CtEeGOI.png">
	<meta name="twitter:image:alt" content="Crea tu cuenta | Doppler Demo Day">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N9KCJTZ');</script>
	<!-- End Google Tag Manager -->
</head>
<body class="dp-library">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9KCJTZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="dp-container-fluid container-screen-pp" id="header">
		<div class="dp-container">
			<div class="dp-rowflex confirmation-container">
				<div class="col-md-12 mt">
					<span id="confirmation-pretitle">¡YA TIENES TU LUGAR RESERVADO!</span>
					<h1 id="reservation-title">Ahora crea tu cuenta en Doppler y prepárate para Demo Day</h1>
					<p id="confirmation-head">Configuraremos tu cuenta paso a paso durante el entrenamiento.</p>
				</div>
				<div class="col-sm-0 col-md-3"></div>
				<div class="col-sm-12 col-md-6">
					<div class="message-container">
						<form id="form-hidden" class="form-hidden" action="/demo-day/create-account.php" method="post">
							<input type="hidden" name="password" id="password-field" placeholder="Escribe tu clave secreta" />
							<input type="hidden" name="post" value='<?=serialize($_POST)?>'/>
							<input type="hidden" id="utm_source" name="utm_source" value='<?= $_GET['utm_source'] ?>' />
							<input type="hidden" id="utm_campaign" name="utm_campaign" value='<?= $_GET['utm_campaign'] ?>' />
							<input type="hidden" id="utm_content" name="utm_content" value='<?= $_GET['utm_content'] ?>' />
							<input type="hidden" id="utm_term" name="utm_term" value='<?= $_GET['utm_term'] ?>' />
							<input type="hidden" id="utm_medium" name="utm_medium" value='<?= $_GET['utm_medium'] ?>' />
							<input type="hidden" id="origin" name="origin" value='<?= $_GET['origin'] ?>' />
							<button type="button" class="dp-button button-medium primary-green button--round btn-prepass" id="btn-set-password">
								Crea tu Cuenta Gratis
							</button>
						</form>
						<div class="col-12"></div>
						<p id="confirmation-footer">¿Ya tienes cuenta en Doppler? <br class="dp-mobile"> <a href="https://app.fromdoppler.com/login" class="link-green anchor-success" target="_blank">Ingresa aquí</a></p>
					</div>
				</div>
				<div class="col-sm-0 col-md-3"></div>
			</div>
		</div>
	</div>
	<div class="dp-container-fluid container-footer-pp" id="footer-confirmation-container">
		<div class="dp-container">
			<div class="dp-rowflex">
				<footer class="col-12">
					<div class="dp-container-fluid">
						<div class="dp-rowflex">
							<div class="col-sm-12 col-md-6 col-lg-6 m-b-12 legal">
								<span>© 2021 <a href="https://www.fromdoppler.com/es/"><strong>Doppler LLC.</strong></a> Todos los derechos
									reservados.</span>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 m-b-12 legal">
								<a href="https://www.fromdoppler.com/es/legal/privacidad/"><strong>Políticas de privacidad y legales.</strong></a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</body>
<script src="js/submits.js?version=<?=VERSION?>"></script>
<script src="https://www.fromdoppler.com/wp-content/themes/doppler_site/utm/utm.js?version=<?=VERSION?>"></script>
</html>