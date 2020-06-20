<?php

// Funkcja rekurencyjna

function repeatItself($greet, $amount)
{
    while($amount > 0) {
        echo $amount.' - '.$greet.'<br/>';
    }

   
}

repeatItself('Hello', 10);