<h1>Login Page</h1>

<?php

if($_SESSION['last_visit'] == '') {
    $_SESSION['last_visit'] == 0;
}
$_SESSION['last_visit']++;