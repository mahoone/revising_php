<?php
include('../utils/utils.php');

$users = array(1 =>
    array('user_email' => 'kamiltb@hotmail.com', 'user_password' => sha1('misio')),
    array('user_email' => 'test@hotmail.com', 'user_password' => sha1('misio1'))
)

// User login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['user_email'];
}