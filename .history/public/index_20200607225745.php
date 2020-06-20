<?php

include('../utils/utils.php');


?>

<a href="index.php?v=numbers">Numbers</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php

$module = $_GET['v'];
if(array_key_exists($module))
{
    echo $module;
}else
{
    echo 'Error';
}


?>
