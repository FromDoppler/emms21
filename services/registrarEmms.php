<?php
require_once('./../config.php');
require_once('curl.php');
require_once('./utils/ipAddress.php');
require_once('./utils/SecurityHelper.php');
require_once('enviarEmailRegistro.php');

function registrarEmms($email)
{
	$firstname 	= isset($_POST['firstname']) 	? $_POST['firstname'] 	: '';
	$lastname 	= isset($_POST['lastname']) 	? $_POST['lastname']	: '';
	$phone 		= isset($_POST['phone']) 		? $_POST['phone'] 		: '';
	$privacy 	= isset($_POST['privacy']) 		? $_POST['privacy'] 	: '';
	$promotions = isset($_POST['promotions']) 	? $_POST['promotions'] 	: '';
	$company 	= isset($_POST['company']) 	    ? $_POST['company'] 	: '';
	$country 	= isset($_POST['country']) 	    ? $_POST['country'] 	: '';

	if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || empty($firstname) || empty($lastname) || empty($phone)) {
		echo json_encode(["error" => "data incorrect: missing parameters"]);
		exit;
	}

	$customFields = array(
		array('name' => 'FIRSTNAME', 'Value' => $firstname),
		array('name' => 'LASTNAME', 'Value' => $lastname),
		array('name' => 'AceptoPoliticaPrivacidad', 'Value' => $privacy),
		array('name' => 'AceptoPromocionesDopplerAliados', 'Value' => $promotions),
		array('name' => 'Telefono', 'Value' => $phone),
		array('name' => 'Company', 'Value' => $company),
		array('name' => 'pais', 'Value' => $country)
	);
	$data = array(
		"email" => $email,
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
$_POST = json_decode(file_get_contents('php://input'), true);
$email = isset($_POST['email']) ? $_POST['email'] : '';

if (in_array($ip, $allow_ips) || !SecurityHelper::maximumSubmissionsCount()) {
	registrarEmms($email);
	enviarEmail($email);
	//TODO revisar respuesta de la api de relay
	SecurityHelper::incrementSubmissions();
} else {
	die("error submissions");
}
