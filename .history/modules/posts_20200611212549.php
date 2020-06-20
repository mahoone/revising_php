<?php

$nazwa = 'Kamil Witoss';

if($id = strpos($nazwa, ' ')) {
    $nazwisko = explode($nazwa, $id);
} else {
    $nazwisko = '';
}

echo $nazwisko;


