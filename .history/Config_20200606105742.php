<?php

$foo = array(1 => 'bmw', 2 => 'audi', 3 => 'ford');

unset($foo[1]);

foreach($foo as $i => $model)
{
    echo $i.' '.$model.'<br/>';
}