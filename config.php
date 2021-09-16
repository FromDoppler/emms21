<?php

define('VERSION', '1.0.8');
define('PRODUCTION', false);
define('SECURITYHELPER_ENABLE', false);

$allow_ips = array('::1','200.5.229.58', '200.5.253.210', '127.0.0.1');

define('API_URL', 'https://newapiqa.fromdoppler.net/accounts/');
define('API_TOKEN', '');//pedir token al equipo

$DB_NAME=getenv("MYSQL_DATABASE");
$DB_USER=getenv("MYSQL_USER");
$DB_PASSWORD= getenv("MYSQL_PASSWORD");
$DB_HOST=getenv("MYSQL_HOST");
$DB_CHARSET='utf8mb4';
$DB_COLLATE='';

function getIpAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){ //check ip from share internet
        $ipaddress=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ // proxy pass ip
        $ipaddress=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipaddress=$_SERVER['REMOTE_ADDR'];
    }
    list($ipaddress) = explode(',',$ipaddress);
    return $ipaddress;
}