<?php
$plik = file('test.txt');
 
foreach($plik as $linia)
{
	$linia = 'Próba skasowania';
}
  	
echo '<pre>';
print_r($plik);
echo '</pre>';