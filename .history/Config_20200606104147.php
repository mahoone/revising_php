<?php

$plik = file("test.txt");

echo '<ul>';

foreach($plik as $linia)
{
    echo '<li>'.$linia.'</li>';
}

echo '</ul>';