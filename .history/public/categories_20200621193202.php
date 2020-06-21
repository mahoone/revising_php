<?php
include('../utils/utils.php');

// Sample user data for testing
$improv_users = array(1 =>
    array('user_email' => 'kamiltb@hotmail.com', 'user_password' => sha1('misio')),
    array('user_email' => 'test@hotmail.com', 'user_password' => sha1('misio1'))
);

// Check if user exists in the array of improv_users
function validate_user($email, $password) {

    global $improv_users;

    $password = sha1($user_password);

    foreach($improv_users as $id => $record) {
        echo $record;
    }
}

// User login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['user_email'];
}