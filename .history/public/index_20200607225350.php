<?php

include('../utils/utils.php');


?>

<a href="index.php?v=numbers">Numbers</a>
<a href="index.php?v=posts">Posts</a>
<hr>

<?php

$module = $_GET['v'];
echo $module;

?>
