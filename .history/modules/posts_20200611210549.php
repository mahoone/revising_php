<?php
 
 	$zrodlo = 'Litwo, ojczyzno moja!';
 	$szukany = 'moja';
 	
 	if(($id = strrpos($zrodlo, $szukany)) !== false) // wlasnie tu
 	{
 		echo 'Szukany ciąg zaczyna się w znaku '.$id;
 	}
 	else
 	{
 		echo 'Nie znaleziono szukanego ciągu';
 	}
 
?>