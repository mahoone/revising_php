<?php

function generateNumber() {
    $randomNumber = array(rand($min = 1, $max = 150));
    
    for($i = 0; $i < 10; $i++){
        echo $randomNumber.'<br/>';
    }
}

generateNumber();


