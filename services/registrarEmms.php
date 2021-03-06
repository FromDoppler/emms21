<?php
require_once('./../config.php');
require_once('curl.php');
require_once('./utils/ipAddress.php');
require_once('./utils/SecurityHelper.php');
require_once('enviarEmailRegistro.php');
require_once('insertarEnSuscriptionsDoppler.php');
require_once('insertarEnRegistrados.php');
require_once('getSubscriptionData.php');


function registrarEmms($user, $status)
{
	require('./../config.php');
	$customFields = array(
		array('name' => 'FIRSTNAME', 'Value' => $user['nombre']),
		array('name' => 'LASTNAME', 'Value' => $user['apellido']),
		array('name' => 'AceptoPoliticaPrivacidad', 'Value' => boolval($user['politica'])),
		array('name' => 'AceptoPromocionesDopplerAliados', 'Value' => boolval($user['promociones'])),
		array('name' => 'Emms2021InvitoDosPersonas', 'Value' => false),
		array('name' => 'tel', 'Value' => $user['telefono']),
		array('name' => 'Company', 'Value' => $user['empresa']),
		array('name' => 'pais', 'Value' => $user['pais']),
		array('name' => 'IP', 'Value' => $user['ip']),
		array('name' => 'PaisIP', 'Value' => $user['pais_ip']),
		array('name' => 'utmsource', 'Value' => $user['source_utm']),
		array('name' => 'utmmedium', 'Value' => $user['medium_utm']),
		array('name' => 'utmcampaign', 'Value' => $user['campaign_utm']),
		array('name' => 'utmcontent', 'Value' => $user['content_utm']),
		array('name' => 'utmterm', 'Value' => $user['term_utm']),
		array('name' => 'esVisitante', 'Value' => $user['es_visitante'])
	);
	$data = array(
		"email" => $user['email'],
		"fields" => $customFields
	);

	$data_string = json_encode($data);
	$headers[] = 'Content-Type: application/json';
	$headers[] = 'Content: ' . strlen($data_string);

	$subscriptionData = getsubscriptionData($status);
	executeCurl($subscriptionData['api_url'], $data_string, $headers, "POST");
	//TODO revisar respuesta de la api de doppler
}



//MAIN
$ip = getIpAddress();
$pais_ip = getCountryNameByIp();

if (in_array($ip, $allow_ips) || !SecurityHelper::maximumSubmissionsCount()) {
	$_POST = json_decode(file_get_contents('php://input'), true);

	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$nombre = isset($_POST['firstname']) 	? $_POST['firstname'] 	: '';
	$apellido = isset($_POST['lastname']) 	? $_POST['lastname']	: '';
	$telefono = isset($_POST['phone']) 		? $_POST['phone'] 		: '';
	$politica 	= isset($_POST['privacy']) 		? $_POST['privacy'] 	: '';
	$promociones = isset($_POST['promotions']) 	? $_POST['promotions'] 	: '';
	$empresa 	= (isset($_POST['company']) && (trim($_POST['company']) !== "")) ? $_POST['company'] : null;
	$pais 	= isset($_POST['country']) 	    ? $_POST['country'] 	: '';
	$source_utm = (isset($_POST['source_utm']) && (trim($_POST['source_utm']) !== "")) ? $_POST['source_utm'] : null;
	$medium_utm = (isset($_POST['medium_utm']) && (trim($_POST['medium_utm']) !== "")) ? $_POST['medium_utm'] : null;
	$campaign_utm = (isset($_POST['campaign_utm']) && (trim($_POST['campaign_utm']) !== "")) ? $_POST['campaign_utm']	: null;
	$content_utm = (isset($_POST['content_utm']) && (trim($_POST['content_utm']) !== "")) ? $_POST['content_utm'] : null;
	$term_utm = (isset($_POST['term_utm']) && (trim($_POST['term_utm']) !== "")) ? $_POST['term_utm'] : null;
	$status = (isset($_POST['status']) && (trim($_POST['status']) !== "")) ? $_POST['status'] : null;
	$es_visitante = (isset($_POST['es_visitante']) && (trim($_POST['es_visitante']) !== "")) ? boolval($_POST['es_visitante']) : null;


	if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($nombre) || empty($apellido) || empty($telefono) || empty($pais) || empty($status)) {
		echo json_encode(["error" => "data incorrect: missing parameters"]);
		exit;
	}

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$subscriptionData = getsubscriptionData($status);
	$registrado = array(
		'email' => $email,
		'list' => $subscriptionData['list'],
		'form_id' => "registrado",
		'invito_dos_personas' => 0,
		'email_anfitrion' => null,
		'register' => date("Y-m-d h:i:s A"),
		'nombre' => $nombre,
		'apellido' => $apellido,
		'pais' => $pais,
		'telefono' => $telefono,
		'empresa' => $empresa,
		'ip' => $ip,
		'pais_ip' => $pais_ip,
		'politica' => intval($politica),
		'promociones' => intval($promociones),
		'source_utm' => $source_utm,
		'medium_utm' => $medium_utm,
		'campaign_utm' => $campaign_utm,
		'content_utm' => $content_utm,
		'term_utm' => $term_utm,
		'es_visitante' => $es_visitante
	);

	registrarEmms($registrado, $status);
	saveRegistrado($registrado);
	saveSuscriptionDoppler($registrado);
	enviarEmailConfirmation($es_visitante, $email, $nombre, $status);
	//TODO revisar respuesta de la api de relay
	SecurityHelper::incrementSubmissions();
} else {
	die("error submissions");
}
