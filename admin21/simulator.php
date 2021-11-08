<?php
require_once('./../config.php');
require_once('./../services/utils/ipAddress.php');

echo "<a href='/admin21'>Back</a><br/>";

if (isVPNUserAdmin()) {
    $status = (isset($_POST['eventStatus'])) ?  $_POST['eventStatus'] : '';
    $ip = (isset($_POST['ip'])) ?  $_POST['ip'] : '';
    $enabled = (isset($_POST['enabled'])) ?  1 : 0;

    if ($enabled && (!$status || !$ip)) {
        echo "datos incorrectos";
        exit;
    }

    include "./../db.php";
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $db->query('UPDATE simulator SET enabled=?, eventStatus=?, ip=?', $enabled, $status, $ip);
    echo "Datos actualizados correctamente<br/>";
} else {
    echo "No tienes permisos para estar aqui";
}
