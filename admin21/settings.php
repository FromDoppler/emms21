<?php

require_once('./../config.php');
require_once('./../services/utils/ipAddress.php');

if (isVPNUserAdmin()) {
    include "./../db.php";
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $insert = $db->query('INSERT INTO settings (youtube, twitch, fallas_tecnicas) VALUES (?,?,?)', $_POST['youtube'], $_POST['twitch'], (int)$_POST['tecnicos']);
    echo "Datos actualizados correctamente<br/>";
    echo "<a href='/admin21'>Back</a>";
} else {
    echo "No tienes permisos para estar aqui!";
}
