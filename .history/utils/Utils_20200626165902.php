<?php

function dumb($dumb_value) {
    echo '<pre>';
    print_r($dumb_value);
    echo '<pre>';
}

dumb($_SESSION);