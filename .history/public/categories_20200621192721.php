<?php
include('../utils/utils.php');

// Sample user data for testing
$improv_users = array(1 =>
    array('user_email' => 'kamiltb@hotmail.com', 'user_password' => sha1('misio')),
    array('user_email' => 'test@hotmail.com', 'user_password' => sha1('misio1'))
);

// Check if user exists in the array of improv_users


// User login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['user_email'];
}