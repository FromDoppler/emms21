<?php

define('VERSION', '1.0.0');
define('PRODUCTION', false);
define('SECURITYHELPER_ENABLE', false);

$allow_ips = array('::1', '200.5.229.58', '200.5.253.210', '127.0.0.1');

define('ACCOUNT_DOPPLER', getenv("ACCOUNT_DOPPLER"));
define('LIST_ID_REGISTRADOS', '28406164'); //lista de prueba
define('LIST_ID_INVITADOS', '28412485'); //lista de prueba
define('API_KEY_DOPPLER', getenv("API_KEY_DOPPLER"));
define('API_URL_SUBSCRIBER_LISTA_REGISTRADOS', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID_REGISTRADOS . '/subscribers?api_key=' . API_KEY_DOPPLER);
define('API_URL_SUBSCRIBER_LISTA_INVITADOS', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID_INVITADOS . '/subscribers?api_key=' . API_KEY_DOPPLER);

//RELAY
define('ACCOUNT_RELAY', getenv("ACCOUNT_RELAY"));
define('API_KEY_RELAY', getenv("API_KEY_RELAY"));
define('API_URL_SEND_EMAIL_RELAY', "http://api.dopplerrelay.com/accounts/" . ACCOUNT_RELAY . "/messages");

define('UTM_URL', 'https://fromdoppler.com/wp-content/themes/doppler_site/utm/utm.js?version=' . VERSION);

$DB_NAME = getenv("MYSQL_DATABASE");
$DB_USER = getenv("MYSQL_USER");
$DB_PASSWORD = getenv("MYSQL_PASSWORD");
$DB_HOST = getenv("MYSQL_HOST");
$DB_CHARSET = 'utf8mb4';
$DB_COLLATE = '';
