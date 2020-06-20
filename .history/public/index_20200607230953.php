<?php

include('../utils/utils.php');


?>

<a href="index.php?v=main">Home</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php


if(array_key_exists('v', $_GET))
{
    $module = $_GET['v'];
}else
{
    $module = 'main';
}


switch($module['v']) {
    case 'main':
        echo '<h1>Home</h1>';
    break;
}


?>
