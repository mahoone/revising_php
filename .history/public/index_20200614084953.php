<?php

include('../utils/utils.php');
include('../utils/modify.php');

?>

<a href="index.php?v=categories">Categories</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php


if(array_key_exists('v', $_GET))
{
    $module = $_GET['v'];
}else
{
    $module = 'categories';
}

// $moduleDir = '../modules/'. $module. '.php';

// if(file_exists($moduleDir)) {
//     require($moduleDir);
// } else {
//     header("HTTP/1.1 404 Not Found");
// }
