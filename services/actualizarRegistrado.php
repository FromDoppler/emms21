<?php

require_once('./../config.php');
require_once('curl.php');
require_once('getSubscriptionData.php');

function actualizarRegistradoEnLista($email, $status)
{

    $customFields = array(
        array('name' => 'Emms2021InvitoDosPersonas', 'Value' => true),
    );
    $data = array(
        "email" => $email,
        "fields" => $customFields
    );

    $data_string = json_encode($data);
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Content: ' . strlen($data_string);
    $subscriptionData = getsubscriptionData($status);
    executeCurl($subscriptionData['api_url'], $data_string, $headers, "POST");
}

function actualizarRegistradoEnBase($email)
{
    require('./../config.php');
    require_once('./../db.php');
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $registrado = $db->query("SELECT id FROM registrados WHERE email='" . $email . "'");
    //chequeo si existe, por si los datos fueron manipulados por js
    if ($registrado->fetchArray()) {
        $db->query("UPDATE registrados SET invito_dos_personas = 1 WHERE email='" . $email . "'");
    }
}
