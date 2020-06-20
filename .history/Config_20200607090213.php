<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
    echo '<ul>';

    echo '<li>'.$numer.' '.$linia.'<br/>';
    
    echo '</ul>';
}
  	
echo '<pre>';
var_dump ($plik);
echo '</pre>';