<?php
function saveSuscriptionDoppler($suscription)
{

    require_once('./../config.php');
    require_once('./../db.php');
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

    //seteo de valores para que el query sea mas legible
    $fields = "(email, list, form_id, invito_dos_personas, register, nombre, apellido, pais, telefono, empresa, ip, pais_ip, politica, ";
    $fields .= "promociones, source_utm, medium_utm, campaign_utm, content_utm, term_utm)";
    $values = array(
        $suscription['email'],
        $suscription['list'],
        $suscription['form_id'],
        $suscription['invito_dos_personas'],
        $suscription['register'],
        $suscription['nombre'],
        $suscription['apellido'],
        $suscription['pais'],
        $suscription['telefono'],
        $suscription['empresa'],
        $suscription['ip'],
        $suscription['pais_ip'],
        $suscription['politica'],
        $suscription['promociones'],
        $suscription['source_utm'],
        $suscription['medium_utm'],
        $suscription['campaign_utm'],
        $suscription['content_utm'],
        $suscription['term_utm']
    );

    $insert = $db->query("INSERT INTO suscriptions_doppler $fields VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $values);
    return $insert;
}
