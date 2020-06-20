<?php

function generateNumber() {
    $randomNumber = array(rand($min = 1, $max = 150));
    
    for($i = 0; $i < 10; $i++){
        print_r($randomNumber).'<br/>';
    }
}

generateNumber();


