<?php
 
 	$nazwa = 'Janusz Kowalski';
 	
 	if(($id = strpos($nazwa, ' ')) !== false)
 	{
 		$nazwisko = substr($nazwa, $id + 1); // +1, by zacząć wycinanie od jednego miejsca za znalezioną spacją
 	}
 	else
 	{
 		$nazwisko = '';
 	}
 	
 	echo $nazwisko;
 
?>