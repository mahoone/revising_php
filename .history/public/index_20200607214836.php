<?php

function generateNumber() {
    $randomNumber = array(rand($min = 1, $max = 50));
    echo $randomNumber;
}

generateNumber();