<?php

define('VERSION', '1.0.8');
define('PRODUCTION', false);
define('SECURITYHELPER_ENABLE', false);

$allow_ips = array('::1', '200.5.229.58', '200.5.253.210', '127.0.0.1');


define('ACCOUNT_DOPPLER', ''); //pedir al equipo
define('LIST_ID', '28406164'); //lista de prueba
define('API_KEY_DOPPLER', ''); //pedir al equipo
define('API_URL_SUBSCRIBER_LIST', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID . '/subscribers?api_key=' . API_KEY_DOPPLER);

//RELAY
define('ACCOUNT_RELAY', ''); //pedir al equipo
define('API_KEY_RELAY', ''); //pedir al equipo
define('API_URL_SEND_EMAIL_RELAY', "http://api.dopplerrelay.com/accounts/" . ACCOUNT_RELAY . "/messages");


$DB_NAME = getenv("MYSQL_DATABASE");
$DB_USER = getenv("MYSQL_USER");
$DB_PASSWORD = getenv("MYSQL_PASSWORD");
$DB_HOST = getenv("MYSQL_HOST");
$DB_CHARSET = 'utf8mb4';
$DB_COLLATE = '';
