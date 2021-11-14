<?php
function getsubscriptionData()
{
	require('./../config.php');
	require_once('./../db.php');
	$db = new db($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
	$data = $db->query('SELECT eventStatus FROM admin21 ORDER BY id DESC LIMIT 1')->fetchArray();
	if ($data['eventStatus'] === 'postinicial') {
		$result['api_url'] = API_URL_SUBSCRIBER_LISTA_REGISTRADOS_POST_EVENTO;
		$result['list'] = LIST_ID_REGISTRADOS_POST_EVENTO;
	} else {
		$result['api_url'] = API_URL_SUBSCRIBER_LISTA_REGISTRADOS;
		$result['list'] = LIST_ID_REGISTRADOS;
	}
	return $result;
}
