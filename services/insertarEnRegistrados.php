<?php

/**Si el usuario no existe en la tabla registrados => lo inserta
 * Si existe entonces actualiza su informacion
 */
function saveRegistrado($usuario)
{
    require('./../config.php');
    require_once('./../db.php');
    $db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $registrado = $db->query("SELECT id FROM registrados WHERE email='" . $usuario['email'] . "'");
    if ($registrado->fetchArray()) {
        //update
        $fields = "SET nombre ='" . $usuario['nombre'] . "', apellido ='" . $usuario['apellido'] . "', register ='" . $usuario['register'] . "', ";
        $fields .= "pais ='" . $usuario['pais'] . "', telefono ='" . $usuario['telefono'] . "', empresa ='" . $usuario['empresa'] . "', ";
        $fields .= "source_utm ='" . $usuario['source_utm'] . "', medium_utm ='" . $usuario['medium_utm'] . "', campaign_utm ='" . $usuario['campaign_utm'] . "', ";
        $fields .= "content_utm ='" . $usuario['content_utm'] . "', term_utm ='" . $usuario['term_utm'] . "' ";
        $update = $db->query("UPDATE registrados $fields WHERE email='" . $usuario['email'] . "'");
        return $update;
    } else {
        $fields = "(email, nombre, apellido, register, pais, telefono, empresa,";
        $fields .= "source_utm, medium_utm, campaign_utm, content_utm, term_utm)";
        $values = array(
            $usuario['email'],
            $usuario['nombre'],
            $usuario['apellido'],
            $usuario['register'],
            $usuario['pais'],
            $usuario['telefono'],
            $usuario['empresa'],
            $usuario['source_utm'],
            $usuario['medium_utm'],
            $usuario['campaign_utm'],
            $usuario['content_utm'],
            $usuario['term_utm']
        );
        $insert = $db->query("INSERT INTO registrados $fields VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $values);
        return $insert;
    }
}
