<?php

function generateNumber() {
    $randomNumber = array(rand(1, 50));
    return $randomNumber;
}

var_dump generateNumber();