<?php

$plik = array(
    'kamil' => 'witos',
    'magda' => 'frankow'
);

echo '<ul>';

foreach($plik as $imiona => $nazwiska)
{
    echo '<li>'.$imiona.' '.$nazwiska.'</li>';
}

echo '</ul>';