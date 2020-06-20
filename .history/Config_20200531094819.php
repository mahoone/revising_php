<?php

// Funkcja rekurencyjna

function repeatItself($greet, $amount)
{
    echo $amount.' - '.$greet.'<br/>';

    if($amount > 0) {
        repeatItself($greet, $amount - 1);
    }
}

repeatItself('Hello', 10);