<?php 

require_once 'bootstrap.php';

if(isset($flocoin) && $flocoin != null) {

		$getbestblockhash = $flocoin->getbestblockhash();

		echo 'The current best hash is <strong>'.$getbestblockhash.'</strong>';
}