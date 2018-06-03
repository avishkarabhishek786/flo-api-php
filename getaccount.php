<?php 

require_once 'bootstrap.php';

if(isset($flocoin) && $flocoin != null) {

	if(isset($_GET['acc'])) {
		$addr = $_GET['acc'];

		$getaccount = $flocoin->getaccountaddress($addr);

		echo '<pre>';
		print_r($getaccount);
		echo '</pre>';
	}
}