<?php

function dumb($dumb_value) {
    '<br>';
     return print_r($dumb_value);
    '<br/>';
}

echo dumb($_SERVER);