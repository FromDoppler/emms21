<?php

require_once('./../config.php');
require_once('./../services/utils/ipAddress.php');

if (isVPNUserAdmin()) {
    include "./../db.php";
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $problems = isset($_POST['tecnicos']) ? '1' :  '0';
    $insert = $db->query('INSERT INTO settings (youtube, twitch, fallas_tecnicas) VALUES (?,?,?)', $_POST['youtube'], $_POST['twitch'], (int) $problems);
    if ((int) $problems === 1) {
        $insert = $db->query('INSERT INTO admin21 (eventStatus) VALUES (?)', 'problems');
    }
    echo "Datos actualizados correctamente<br/>";
    echo "<a href='/admin21'>Back</a>";
} else {
    echo "No tienes permisos para estar aqui!";
}
