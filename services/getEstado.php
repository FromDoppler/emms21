<?php
require_once('./../config.php');
require_once('./../db.php');
require_once('./utils/ipAddress.php');

$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
$data = $db->query('SELECT eventStatus FROM admin21 ORDER BY id DESC LIMIT 1')->fetchArray();
$simulator = $db->query('SELECT * FROM simulator')->fetchArray();
$ip = getIpAddress();
if ($simulator['enabled'] && $simulator['ip'] === $ip) {
    echo json_encode(array("eventStatus" => $simulator['eventStatus']));
} else {
    echo json_encode($data);
}
