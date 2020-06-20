<?php

$tekst = 'Komenda; Komenda; Komendda; Komenda; Komenda. To juz pomojamy.';
$tablica = array(0 => '');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
   switch($tekst[$i])
   {
       '<pre>'
        case ' ':
            var_dump('Spacja wykryta '.$tekst[$i]);
            continue 2;
        case '.':
            var_dump('Kropka wykryta '.$tekst[$i]);
            break 2;
        case ';':
            $t++;
            $tablica[$t] = '';
            var_dump('Tekst '.$tekst[$i]);
            var_dump('Tablica '.$tablica[$t]);
            break;
        default:   
            $tablica[$t] = $tablica[$t].$tekst[$i];
            var_dump ($tablica[$t]);
            '</pre>'
   }
}

echo '<pre>';
var_dump($tablica);
echo '</pre>';