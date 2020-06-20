<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
	echo $numer.$linia;
}
  	
echo '<pre>';
var_dump ($plik);
echo '</pre>';