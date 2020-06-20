<?php

function generateNumber() {
    
    for($i = 0; $i < 10; $i++){
        $randomNumber = array(rand($min = 1, $max = 150));
        print_r($randomNumber).'<br/>';
    }
}

generateNumber();


