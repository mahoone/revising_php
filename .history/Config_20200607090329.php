<?php
$plik = file('test.txt');
 
foreach($plik as $i => $linia)
{
    echo '<ul>';

    echo '<li>'.$i.' '.$linia.'<br/>';
    
    echo '</ul>';
}
  	
echo '<pre>';
var_dump ($plik);
echo '</pre>';