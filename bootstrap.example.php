<?php

$username = 'Your Flo username as in wallet config file';
$password = 'Your Flo password as in wallet config file';
$port = '7313';

require_once('easybitcoin.php');

$flocoin = null;

try {

    $flocoin = new Bitcoin($username,$password,'localhost',$port);

} catch (Exception $flocoin) {
    echo 'Error: '.$flocoin->error;
    exit;
}
