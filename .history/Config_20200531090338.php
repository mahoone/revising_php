<?php

function showNumber() {
    $argumenty = func_get_args();

    echo '<ul>';
    foreach($argumenty as $id => $wartosc) {
        echo '<li>'.$id.' - '.$wartosc.'</li>';
    } 
    echo '</ul>';
}
$randomNumber = random_int(10, 100);
showNumber(5, 3, 4, 10, 100);