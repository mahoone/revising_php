<?php
require('../includes/config.php');
require('../includes/dispatch.php');
require('../includes/session.php');
require('../includes/authorize.php');
require('../includes/templates.php');
require('../includes/functions.php');
require('../includes/layout.php');

initSystem();
dispatchAction(isset($_GET['act']) ? $_GET['act'] : 'index');