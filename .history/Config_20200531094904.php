<?php

// Funkcja rekurencyjna

function repeatItself($greet, $amount)
{
    

    if($amount > 0) {
        return $amount.' - '.$greet.'<br/>';
    }
}

repeatItself('Hello', 10);