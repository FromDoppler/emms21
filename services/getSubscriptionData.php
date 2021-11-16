<?php
function getsubscriptionData($status)
{
	require('./../config.php');
	if ($status === 'postinicial') {
		$result['api_url'] = API_URL_SUBSCRIBER_LISTA_REGISTRADOS_POST_EVENTO;
		$result['list'] = LIST_ID_REGISTRADOS_POST_EVENTO;
	} else {
		$result['api_url'] = API_URL_SUBSCRIBER_LISTA_REGISTRADOS;
		$result['list'] = LIST_ID_REGISTRADOS;
	}
	return $result;
}
