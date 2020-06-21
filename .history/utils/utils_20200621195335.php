<?php
require('../public/categories.php');
session_start();

// Check if current user's ID is cached
if(!isset($_SESSION['current_user'])) {
    $_SESSION['current_user'] = 0;
}

// If user is already logged in then show message
if($_SESSION['current_user'] > 0) {
    echo 'Hey there';
}

// Count user visits
function visit_counter() {
    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } 

    $_SESSION['counter']++;
    echo "To twoja ".$_SESSION['counter'].' wizyta!';
}

function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// Handle re-directs

// if(array_key_exists('v', $_GET))
// {
//     $module = $_GET['v'];
// }else
// {
//     $module = 'categories';
// }

// $moduleDir = '../modules/'. $module. '.php';

// if(file_exists($moduleDir)) {
//     require($moduleDir);
// } else {
//     header("HTTP/1.1 404 Not Found");
// }
