<?php 
function funkcja($a)
{
	$argumenty = func_get_args();
	foreach($index as $liczba => $argumenty) {
		echo $argumenty;
	}
}
 
funkcja(1, 2, 3, 4, 5);