<?php 

require_once 'bootstrap.php';

if(isset($flocoin) && $flocoin != null) {

	$getbalance = $flocoin->getbalance();

	echo "Your balance is ".$getbalance." FLOs";

}