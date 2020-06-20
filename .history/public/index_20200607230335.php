<?php

include('../utils/utils.php');


?>

<a href="index.php?v=numbers">Numbers</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php


if(array_key_exists('v', $_GET))
{
    $module = $_GET['v'];
}else
{
    $module = 'posts';
}


?>
