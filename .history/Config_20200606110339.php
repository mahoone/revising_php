<?php

$foo = array(1 => 'bmw', 2 => 'audi', 3 => 'ford');

unset($foo[2]);

foreach($foo as $i => $model)
{
    $nowa = 4;
    $i = $nowa;
    echo $nowa.' '.$model.'<br/>';
}