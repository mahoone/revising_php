<?php

$plik = file("test.txt");

echo '<ul>';

foreach($plik as $linia => $numer)
{
    echo '<li>'.$numer.'</li>';
}

echo '</ul>';