<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
	echo $numer;
}
  	
echo '<pre>';
echo ($numer. $plik);
echo '</pre>';