<?php

$foo = array(1 => 'bmw', 2 => 'audi', 3 => 'ford');

unset($foo[2]);

foreach($foo as $i => $model)
{
    $nowa = 0;
    $nowa = $i;
    echo $i.' '.$model.'<br/>';
}