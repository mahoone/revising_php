<?php

$plik = file("test.txt");

echo '<ul>';

foreach($plik as $linia)
{
    echo '<li>'.trim($linia).'</li>';
}

echo '</ul>';