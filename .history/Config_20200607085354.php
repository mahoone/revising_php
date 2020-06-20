<?php
$plik = file('test.txt');
 
foreach($plik as $linia)
{
	$plik[$linia] = trim($linia).' [OK]';
}
  	
echo '<pre>';
print_r($plik);
echo '</pre>';