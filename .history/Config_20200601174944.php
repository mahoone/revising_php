<?php

$tekst = 'Komenda; Komenda; Komenda; Komenda. To juz pomojamy.';
$tablica = array(0 => '');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
    if($tekst[$i] == '')
    {
    break;
    }
}