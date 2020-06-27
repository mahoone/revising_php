<?php

function dumb($dumb_value) {
    echo '<pre>';
    print_r($dumb_value);
    echo '<pre>';
}

echo dumb($_SERVER);