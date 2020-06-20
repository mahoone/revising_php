<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
	$plik[$linia] = trim($linia).' [OK]';
}
  	
echo '<pre>';
echo ($numer. $plik);
echo '</pre>';