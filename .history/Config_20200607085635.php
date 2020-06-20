<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
	$plik[$linia] = trim($linia).' [OK]';
}
  	
echo '<pre>';
print_r($numer, $plik);
echo '</pre>';