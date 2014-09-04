<?php

function lire_et_parser()

{	

	$lines = file('http://cogitium.free.fr/RA3A2465/cogitium.log');
	return $lines;	
	
}
	
?>