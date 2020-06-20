<?php

$tekst = 'Komenda; Komenda; Komendda; Komenda; Komenda. To juz pomojamy.';
$tablica = array('');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
   switch($tekst[$i])
   {
        case ' ':
            var_dump($tekst[$i]);
            continue 2;
        case '.':
            var_dump($tekst[$i]);
            break 2;
        case ';':
            $t++;
            $tablica[$t] = '';
            var_dump($tekst[$i]);
            var_dump($tablica[$t]);
            break;
        default:   
            $tablica[$t] = $tablica[$t].$tekst[$i];
            var_dump ($tablica[$t]);
   }
}

echo '<pre>';
var_dump($tablica);
echo '</pre>';