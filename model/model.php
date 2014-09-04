<?php

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://cogitium.free.fr/RA3A2465/cogitium.log");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$contenu = curl_exec($curl);
?>