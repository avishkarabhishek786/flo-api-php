<?php 

require_once 'bootstrap.php';

if(isset($flocoin) && $flocoin != null) {

	$getmininginfo = $flocoin->getmininginfo();

	echo "<h2>Mining details:</h2>";

	if(is_array($getmininginfo) && !empty($getmininginfo)) {
		foreach ($getmininginfo as $key => $info) {
				echo $key ." = ".$info.'<br>';
			}
	}

}