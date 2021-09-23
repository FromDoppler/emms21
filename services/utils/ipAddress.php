<?php

function getIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { //check ip from share internet
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { // proxy pass ip
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    }
    list($ipaddress) = explode(',', $ipaddress);
    return $ipaddress;
}


function isVPNUserAdmin()
{
    require_once('./../config.php');
    if (PRODUCTION) {
        $ip = getIpAddress();
        if (in_array($ip, $allow_ips))
            return true;
        else
            return false;
    } else {
        return true;
    }
}
