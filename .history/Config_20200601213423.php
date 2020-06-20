<?php

$tekst = 'Komenda; Komenda; Komenda; Komenda. To juz pomojamy.';
$tablica = array(0 => '');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
   switch($tekst[$i])
   {
        case ' ':
            continue 2;
        case '.':
            break 2;
        case ';':
            $t++;
            $tablica[$t] = '';
            break;
        default:
            $tablica[$t] .= $tekst[$i];
   }
}

echo '<pre>';
echo ($tablica);
echo '</pre>';