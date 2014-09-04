<?php 

	// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne	

	foreach ($lines as $line_num => $line) 
	{
    	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
	}

 ?>