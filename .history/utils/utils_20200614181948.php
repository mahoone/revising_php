<?php

session_start();

// Count user visits
function visit_counter() {
    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } 

    $_SESSION['counter']++;
    echo "To twoja ".$_SESSION['counter'].' wizyta!';
}

// Show info about user

function visitor_info() {
    if(!isset($_SERVER)) {
        dumb($_SERVER)
    }
}


function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// Handle re-directs

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
