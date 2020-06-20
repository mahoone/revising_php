<?php

function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

if(array_key_exists('v', $_GET))
{
    $module = $_GET['v'];
}else
{
    $module = 'categories';
}

$moduleDir = '../modules/'. $module. '.php';

if(file_exists($moduleDir)) {
    require($moduleDir);
} else {
    header("HTTP/1.1 404 Not Found");
}

<?php
 	ob_start();	
 	
  	echo '<p>Pan Jan Nowak jest bardzo nieprzyzwoitym człowiekiem. Powiada, że dzień bez łapówki to
 		dzień stracony. Pracuje w urzędzie miejskim Obiektowa i nie wstydzi się swych podejrzanych interesów.</p>';
 	
 	// CENZURA
 	// Pobieramy zbuforowany tekst
 	// I **dla czytelności** przykładu zapisujemy go w zmiennej	
 	$kod = ob_get_clean();
 	
 	if(isset($_GET['real']))
 	{
 		// Wtajemniczeni znają całą prawdę
 		echo $kod;
 	}
 	else
 	{
 		// Reszta może się tylko domyślać
 		echo str_replace(array(
 			'Jan Nowak',
 			'Obiektowo',
 			'Obiektowa'	
 		), array(
 			'Alojzy Kromka',
 			'Hyzia Wólka',
 			'Hyziej Wólki'	
 		), $kod);
 	}
 
?>