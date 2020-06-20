<?php
require('../includes/dispach.php');

initSystem();
dispatchAction(isset($_GET['act']) ? $_GET['act'] : 'index');