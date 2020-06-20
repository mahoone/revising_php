<?php
$plik = file('test.txt');
 
foreach($plik as $linia => $numer)
{
    echo '<ul>';

    echo '<li>'.$linia.' '.$numer.'<br/>';
    
    echo '</ul>';
}
  	
echo '<pre>';
var_dump ($plik);
echo '</pre>';