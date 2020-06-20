<?php
$plik = file('test.txt');
 
foreach($plik as $linia)
{
	$linia = 'Próba skasowania';
}
  	
echo '<pre>';
var_dump($plik);
echo '</pre>';