<?php

function dumb($dumb_value) {
    return print_r($dumb_value);
}

echo dumb($_SESSION);