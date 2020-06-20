<?php

$tablica = array(0 => 5, 3, 8, 7, 9, 24, 15, 2, 19);

// modyfikuj losowy element tablicy
$tablica[rand(0, 7)] = 6;

print_r($tablica);