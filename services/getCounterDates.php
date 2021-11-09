<?php
require_once('./../config.php');

$data['endTimePre']    = $ENDTIMEPRE;
$data['endTimeDuring'] = $ENDTIMEDURING;

echo json_encode($data);
