<?php

$nazwa = 'Kamil Witoss';

if($id = strpos($nazwa, ' ')) {
    $nazwisko = substr($nazwa, $id +1);
} else {
    $nazwisko = '';
}

echo $nazwisko;


