<?php

define('VERSION', '1.0.0');
define('PRODUCTION', false);
define('SECURITYHELPER_ENABLE', false);

$allow_ips = array('::1', '200.5.229.58', '200.5.253.210', '127.0.0.1');

$ENDTIMEPRE     = "Nov 18, 2021 12:30:00";
$ENDTIMEDURING  = "Nov 20, 2021 12:30:00";

$SPEAKERURL["tim-ash"] = "https://www.youtube.com/embed/7O7y__bGFVM?rel=0";
$SPEAKERURL["paola-aldaz-biere"] = "https://www.youtube.com/embed/Cpiha4mQN1M?rel=0";
$SPEAKERURL["eliot-ross"] = "https://www.youtube.com/embed/mXLGLK0c4zc?rel=0";
$SPEAKERURL["pablo-castellano-alventosa"] = "https://www.youtube.com/embed/OdJ1Hh1btAE?rel=0";
$SPEAKERURL["ricardo-diez"] = "https://www.youtube.com/embed/WyV50JUxUpM?rel=0";


//sumar un valor al contador para forzar el refresco masivo de usuarios
$FORCE_REFRESH  = 14;

define('ACCOUNT_DOPPLER', getenv("ACCOUNT_DOPPLER"));
define('LIST_ID_REGISTRADOS', '28423395'); //lista de prueba
define('LIST_ID_INVITADOS', '28412485'); //lista de prueba
define('LIST_ID_REGISTRADOS_POST_EVENTO', '28432766'); //lista de prueba
define('API_KEY_DOPPLER', getenv("API_KEY_DOPPLER"));
define('API_URL_SUBSCRIBER_LISTA_REGISTRADOS', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID_REGISTRADOS . '/subscribers?api_key=' . API_KEY_DOPPLER);
define('API_URL_SUBSCRIBER_LISTA_INVITADOS', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID_INVITADOS . '/subscribers?api_key=' . API_KEY_DOPPLER);
define('API_URL_SUBSCRIBER_LISTA_REGISTRADOS_POST_EVENTO', 'https://restapi.fromdoppler.com/accounts/' . ACCOUNT_DOPPLER . '/lists/' . LIST_ID_REGISTRADOS_POST_EVENTO . '/subscribers?api_key=' . API_KEY_DOPPLER);


//RELAY
define('ACCOUNT_RELAY', getenv("ACCOUNT_RELAY"));
define('API_KEY_RELAY', getenv("API_KEY_RELAY"));
define('API_URL_SEND_EMAIL_RELAY', "http://api.dopplerrelay.com/accounts/" . ACCOUNT_RELAY . "/messages");

define('UTM_URL', 'https://fromdoppler.com/wp-content/themes/doppler_site/utm/utm.js?version=' . VERSION);
define('DOMAIN_IFRAME_CHAT', 'emms21.com');

$DB_NAME = getenv("MYSQL_DATABASE");
$DB_USER = getenv("MYSQL_USER");
$DB_PASSWORD = getenv("MYSQL_PASSWORD");
$DB_HOST = getenv("MYSQL_HOST");
$DB_CHARSET = 'utf8mb4';
$DB_COLLATE = '';
