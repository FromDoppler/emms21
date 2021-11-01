<?php
require_once('./../config.php');
require_once('./../db.php');

$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$data = $db->query('SELECT eventStatus FROM admin21 ORDER BY id DESC LIMIT 1')->fetchArray();
echo json_encode($data);
