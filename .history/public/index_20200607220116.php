<?php

function generateNumber() {
    
    for($i = 0; $i < 10; $i++){
        $randomNumber = array(rand($min = 1, $max = 150));
        echo '<pre>'; var_dump($randomNumber); '</pre>';
    }
}

generateNumber();


