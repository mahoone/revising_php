<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include('../utils/utils.php');

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


?>

<a href="index.php?v=categories">Categories</a>
<a href="index.php?v=posts">Posts</a>
<hr>
</body>
</html>





