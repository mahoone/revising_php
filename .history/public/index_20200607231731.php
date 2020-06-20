<?php

include('../utils/utils.php');


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


switch($module) {
    case 'categories':
        include ('./modules/categories.php');
    break;
    case 'posts':
        include ('./modules/posts.php');
    break;
    default:
        echo 'Nic nie ma';
}


?>
