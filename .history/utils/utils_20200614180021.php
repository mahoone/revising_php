<?php

function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function redirects() {
    if(array_key_exists('v', $_GET))
    {
        $module = $_GET['v'];
    }else
    {
        $module = 'categories';
    }

    $moduleDir = '../modules/'. $module. '.php';

    if(file_exists($moduleDir)) {
        require($moduleDir);
    } else {
        header("HTTP/1.1 404 Not Found");
    }
}