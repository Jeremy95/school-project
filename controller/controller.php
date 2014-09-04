<?php 
	
	$bnj = lire_et_parser();	


	$code = file_get_contents('cogitium/cogitium.log');	
	preg_match_all('!http://[A-Za-z0-9][A-Za-z0-9\-\.]+[A-Za-z0-9]\.[A-Za-z]{2,}[\43-\176]*+!isU', $code, $lien);

	//print_r($lien);

	if(!empty($lien))
	{
			foreach ($lien as $value) 
			{
				$site = file($value);
				$site++;
				file_put_contents('statistique.txt', $site);
				return $site;
			}
	}
	

	//$explode = explode('-----', $lien);
	//
	//$site = file_get_contents($explode);
	//$site++;
	//file_put_contents($explode, $site);
	//return $site;	

	

 ?>