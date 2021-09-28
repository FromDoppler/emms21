<?php
require_once('./../config.php');
require_once('curl.php');
require_once('./utils/ipAddress.php');
require_once('./utils/SecurityHelper.php');
require_once('enviarEmailRegistro.php');
require_once('insertarEnSuscriptionsDoppler.php');
require_once('insertarEnRegistrados.php');
function registrarEmms($user)
{
	$customFields = array(
		array('name' => 'FIRSTNAME', 'Value' => $user['nombre']),
		array('name' => 'LASTNAME', 'Value' => $user['apellido']),
		array('name' => 'AceptoPoliticaPrivacidad', 'Value' => boolval($user['politica'])),
		array('name' => 'AceptoPromocionesDopplerAliados', 'Value' => boolval($user['promociones'])),
		array('name' => 'Telefono', 'Value' => $user['telefono']),
		array('name' => 'Company', 'Value' => $user['empresa']),
		array('name' => 'pais', 'Value' => $user['pais']),
		array('name' => 'IP', 'Value' => $user['ip']),
		array('name' => 'PaisIP', 'Value' => $user['pais_ip']),
		array('name' => 'utmsource', 'Value' => $user['source_utm']),
		array('name' => 'utmmedium', 'Value' => $user['medium_utm']),
		array('name' => 'utmcampaign', 'Value' => $user['campaign_utm']),
		array('name' => 'utmcontent', 'Value' => $user['content_utm']),
		array('name' => 'utmterm', 'Value' => $user['term_utm']),
	);
	$data = array(
		"email" => $user['email'],
		"fields" => $customFields
	);

	$data_string = json_encode($data);
	$headers[] = 'Content-Type: application/json';
	$headers[] = 'Content: ' . strlen($data_string);

	executeCurl(API_URL_SUBSCRIBER_LIST, $data_string, $headers, "POST");
	//TODO revisar respuesta de la api de doppler
}



//MAIN
$ip = getIpAddress();

if (in_array($ip, $allow_ips) || !SecurityHelper::maximumSubmissionsCount()) {
	$_POST = json_decode(file_get_contents('php://input'), true);

	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$nombre 	= isset($_POST['firstname']) 	? $_POST['firstname'] 	: '';
	$apellido 	= isset($_POST['lastname']) 	? $_POST['lastname']	: '';
	$telefono 		= isset($_POST['phone']) 		? $_POST['phone'] 		: '';
	$politica 	= isset($_POST['privacy']) 		? $_POST['privacy'] 	: '';
	$promociones = isset($_POST['promotions']) 	? $_POST['promotions'] 	: '';
	$empresa 	= isset($_POST['company']) 	    ? $_POST['company'] 	: null;
	$pais 	= isset($_POST['country']) 	    ? $_POST['country'] 	: '';
	$source_utm 	= isset($_POST['source_utm']) 	    ? $_POST['source_utm'] 	: null;
	$medium_utm 	= isset($_POST['medium_utm']) 	    ? $_POST['medium_utm'] 	: null;
	$campaign_utm 	= isset($_POST['campaign_utm']) 	    ? $_POST['campaign_utm'] 	: null;
	$content_utm 	= isset($_POST['content_utm']) 	    ? $_POST['content_utm'] 	: null;
	$term_utm 	= isset($_POST['term_utm']) 	    ? $_POST['term_utm'] 	: null;


	if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($nombre) || empty($apellido) || empty($telefono) || empty($pais)) {
		echo json_encode(["error" => "data incorrect: missing parameters"]);
		exit;
	}

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$registrado = array(
		'email' => $email,
		'list' => LIST_ID_REGISTRADOS,
		'form_id' => "registrado",
		'invito_dos_personas' => 0,
		'register' => date("Y-m-d h:i:s A"),
		'nombre' => $nombre,
		'apellido' => $apellido,
		'pais' => $pais,
		'telefono' => $telefono,
		'empresa' => $empresa,
		'ip' => $ip,
		'pais_ip' => "pais harcode",
		'politica' => intval($politica),
		'promociones' => intval($promociones),
		'source_utm' => $source_utm,
		'medium_utm' => $medium_utm,
		'campaign_utm' => $campaign_utm,
		'content_utm' => $content_utm,
		'term_utm' => $term_utm
	);

	registrarEmms($registrado);
	saveRegistrado($registrado);
	saveSuscriptionDoppler($registrado);
	enviarEmail($email);
	//TODO revisar respuesta de la api de relay
	SecurityHelper::incrementSubmissions();
} else {
	die("error submissions");
}
