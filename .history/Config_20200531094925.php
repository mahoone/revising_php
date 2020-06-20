<?php

// Funkcja rekurencyjna

function repeatItself($greet, $amount)
{
    

    if($amount > 0) {
        return $amount.' - '.$greet.'<br/>';
    }
}

echo repeatItself('Hello', 10);