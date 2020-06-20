<?php

include('../utils/utils.php');


?>

<a href="index.php?v=numbers">Numbers</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php

if(array_key_exists(key: 'v', $_GET))
{
    return;
}else
{
    echo 'Error';
}


?>
