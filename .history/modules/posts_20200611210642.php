<?php
 
 	$zrodlo = 'Litwo, moja ojczyzno moja!';
 	$szukany = 'moja';
 	
 	if(($id = strripos($zrodlo, $szukany)) !== false) // wlasnie tu
 	{
 		echo 'Szukany ciąg zaczyna się w znaku '.$id;
 	}
 	else
 	{
 		echo 'Nie znaleziono szukanego ciągu';
 	}
 
?>