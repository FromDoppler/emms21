<?php

require('./../config.php');

$data['forceRefresh']    = $FORCE_REFRESH;

echo json_encode($data);
