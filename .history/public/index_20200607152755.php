<?php
require('../includes/dispatch.php');

initSystem();
dispatchAction(isset($_GET['act']) ? $_GET['act'] : 'index');