<?php
require_once('./../config.php');

$_POST = json_decode(file_get_contents('php://input'), true);

$data['url'] = $SPEAKERURL[$_POST['speaker']];

echo json_encode($data);
