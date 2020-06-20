<?php

function showNumber() {
    $randomNumber = random_int(10, 100);
    $argumenty = func_get_args($randomNumber);

    echo '<ul>';
    foreach($argumenty as $id => $wartosc) {
        echo '<li>'.$id.' - '.$wartosc.'</li>';
    } 
    echo '</ul>';
}

showNumber();