<?php

$tekst = 'Komenda; Komenda; Komendda; Komenda; Komenda. To juz pomojamy.';
$tablica = array(0 => '');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
   switch($tekst[$i])
   {
        case ' ':
            var_dump($tekst[$i])
            continue 2;
        case '.':
            break 2;
        case ';':
            $t++;
            $tablica[$t] = '';
            break;
        default:   
            $tablica[$t] = $tablica[$t].$tekst[$i];
            var_dump ($tablica[$t]);
   }
}

echo '<pre>';
var_dump($tablica);
echo '</pre>';