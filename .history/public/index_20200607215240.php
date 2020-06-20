<?php

function generateNumber() {
    $randomNumber = array(rand($min = 1, $max = 150));
    return print_r($randomNumber);
}

generateNumber();
