<?php

//$zmienna = 'To jest zmienna';
 
function funkcja()
{
    global $zmienna;
	echo $zmienna.'<br/>';
}
 
funkcja();
echo $zmienna.'<br/>';