<?php 
function funkcja()
{
	$argumenty = func_get_args();
	foreach($argumenty as $id => $liczba) {
		echo $id.' '.$liczba.'<br/>';
	}
}
 
funkcja(1, 2, 3, 4, 5);