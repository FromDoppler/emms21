<?php
require_once('./../config.php');
require_once('curl.php');

function enviarEmail($emailToSend)
{
    //TODO verificar contenido final del emial
    $html = "<h1>hola mundo</h1>";
    $subject = "Email registration";
    $fromName = "Emms21";
    $emailSender = 'info@fromdoppler.com';

    $data = array(
        'from_name' => $fromName,
        'from_email' => $emailSender,
        'reply_to' => array("email" => $emailSender),
        'recipients' => array(array('type' => 'to', 'email' => $emailToSend)),
        'subject' => $subject,
        'html' => $html
    );

    $data_string = json_encode($data);
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: token ' . API_KEY_RELAY;
    $headers[] = 'Content: ' . strlen($data_string);

    return executeCurl(API_URL_SEND_EMAIL_RELAY, $data_string, $headers, "POST");
}
