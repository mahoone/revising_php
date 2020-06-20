<?php

$tekst = 'Komenda; Komenda; Komendda; Komenda; Komenda. To juz pomojamy.';
$tablica = array(0 => '');
$t = 0;

for($i = 0; $i < strlen($tekst); $i++)
{
   switch($tekst[$i])
   {
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
   }
}

echo '<pre>';
var_dump($tablica);
echo '</pre>';


$a = 0;


if($a == 0) {
    echo 'A = 0';
}
elseif($a !== 0) {
    echo 'A nie rowna sie 0';
}
else
{
    echo 'a nie rowna sie 1 ani 0';
}
