<?php
require('../includes/dispach.php');


dispatchAction(isset($_GET['act']) ? $_GET['act'] : 'index');