<?php
 
 	$adresy = array(0 =>
 		'http://www.wikibooks.pl',
 		'www.wikibooks.pl'	
 	);
 	
 	foreach($adresy as $adres)
 	{
 		if(strpos($adres, 'http://') === 0)
 		{
 			// jest http://
 			echo '<p>'.$adres.'</p>';
 		}
 		else
 		{
 			// nie ma http://
 			echo '<p>http://'.$adres.'</p>';
 		}	
 	}
 
?>