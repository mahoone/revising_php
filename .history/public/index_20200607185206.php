<?php

function formatuj($tekst)
{
   echo '<strong>'.$tekst.'</strong>';
} // end formatuj();

// ...

$dane = file('test.txt');
echo '<ul>';
foreach($dane as $linia)
{
   $wiersz = explode('|', trim($linia));
   echo '<li>'.formatuj($wiersz[0]).': '.$wiersz[1].'</li>';
}
echo '</ul>';