<?php

include('../utils/utils.php');

dumb($_GET);

?>

<a href="index.php?v=numbers">Numbers</a>
<a href="index.php?v=posts">Posts</a>

<?php

$module = $_GET;
echo $module;
