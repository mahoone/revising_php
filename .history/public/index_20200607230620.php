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

if($module == 'main') {
    '<h1>'Home'</h1>';
}


?>
