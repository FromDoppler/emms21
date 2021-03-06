<?php
require_once('./../config.php');
require_once('curl.php');
require_once('./utils/ipAddress.php');
require_once('./utils/SecurityHelper.php');
require_once('actualizarRegistrado.php');
require_once('insertarEnSuscriptionsDoppler.php');


function invitarEmms($invitado)
{
    $customFields = array(
        array('name' => 'Emms2021EmailAnfitrion', 'Value' => $invitado['email_anfitrion']),
        array('name' => 'utmsource', 'Value' => $invitado['source_utm']),
        array('name' => 'utmmedium', 'Value' => $invitado['medium_utm']),
        array('name' => 'utmcampaign', 'Value' => $invitado['campaign_utm']),
        array('name' => 'utmcontent', 'Value' => $invitado['content_utm']),
        array('name' => 'utmterm', 'Value' => $invitado['term_utm'])
    );
    $data = array(
        "email" => $invitado['email'],
        "fields" => $customFields
    );

    $data_string = json_encode($data);
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Content: ' . strlen($data_string);

    executeCurl(API_URL_SUBSCRIBER_LISTA_INVITADOS, $data_string, $headers, "POST");
    //TODO revisar respuesta de la api de doppler
}

function invitoDosPersonasValidation($email_invitado1, $email_invitado2)
{
    if (
        !empty($email_invitado1) && (filter_var($email_invitado1, FILTER_VALIDATE_EMAIL)) &&
        !empty($email_invitado2) && (filter_var($email_invitado2, FILTER_VALIDATE_EMAIL))
    ) {
        return 1;
    } else {
        return 0;
    }
}
//MAIN
$ip = getIpAddress();
$pais_ip = getCountryNameByIp();

if (in_array($ip, $allow_ips) || !SecurityHelper::maximumSubmissionsCount()) {

    $_POST = json_decode(file_get_contents('php://input'), true);
    $email_anfitrion = isset($_POST['email']) ? $_POST['email'] : '';
    $email_invitado1 = isset($_POST['email1']) ? $_POST['email1'] : '';
    $email_invitado2 = isset($_POST['email2']) ? $_POST['email2'] : '';
    $source_utm = (isset($_POST['source_utm']) && (trim($_POST['source_utm']) !== "")) ? $_POST['source_utm'] : null;
    $medium_utm = (isset($_POST['medium_utm']) && (trim($_POST['medium_utm']) !== "")) ? $_POST['medium_utm'] : null;
    $campaign_utm = (isset($_POST['campaign_utm']) && (trim($_POST['campaign_utm']) !== "")) ? $_POST['campaign_utm']    : null;
    $content_utm = (isset($_POST['content_utm']) && (trim($_POST['content_utm']) !== "")) ? $_POST['content_utm'] : null;
    $term_utm = (isset($_POST['term_utm']) && (trim($_POST['term_utm']) !== "")) ? $_POST['term_utm']    : null;

    if (
        empty($email_invitado1) || (!filter_var($email_invitado1, FILTER_VALIDATE_EMAIL))
    ) {
        echo json_encode(["error" => "data incorrect: missing parameters"]);
        exit;
    }

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $registrado = array(
        'email' => $email_anfitrion,
        'list' => LIST_ID_REGISTRADOS,
        'form_id' => "registrado",
        'invito_dos_personas' => invitoDosPersonasValidation($email_invitado1, $email_invitado2),
        'email_anfitrion' => null,
        'register' => date("Y-m-d h:i:s A"),
        'nombre' => "",
        'apellido' => "",
        'pais' => "",
        'telefono' => "",
        'empresa' => "",
        'ip' => $ip,
        'pais_ip' => $pais_ip,
        'politica' => 1,
        'promociones' => null,
        'source_utm' => $source_utm,
        'medium_utm' => $medium_utm,
        'campaign_utm' => $campaign_utm,
        'content_utm' => $content_utm,
        'term_utm' => $term_utm
    );

    if (invitoDosPersonasValidation($email_invitado1, $email_invitado2)) {
        actualizarRegistradoEnLista($email_anfitrion, $status);
        actualizarRegistradoEnBase($email_anfitrion, $status);
    }
    saveSuscriptionDoppler($registrado);
    $registrado['email'] = $email_invitado1;
    $registrado['list'] = LIST_ID_INVITADOS;
    $registrado['email_anfitrion'] = $email_anfitrion;
    $registrado['form_id'] = "invitado";
    $registrado['politica'] = null;
    $registrado['invito_dos_personas'] = 0;
    invitarEmms($registrado);
    saveSuscriptionDoppler($registrado);
    //TODO enviar email al invitado
    if (!empty($email_invitado2) || filter_var($email_invitado2, FILTER_VALIDATE_EMAIL)) {
        $registrado['email'] = $email_invitado2;
        invitarEmms($registrado);
        saveSuscriptionDoppler($registrado);
    }
    //TODO enviar email al invitado
    //TODO revisar respuesta de la api de relay
    SecurityHelper::incrementSubmissions();
} else {
    die("error submissions");
}
