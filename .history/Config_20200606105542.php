<?php
$plik = file('test.txt');
unset($plik[1]); // usuwamy linijkę o indeksie 1
echo '<ul>';
foreach($plik as $numer => $linia)
{
	echo '<li>Linia #'.$numer.': '.trim($linia).'</li>';	
}
echo '</ul>';