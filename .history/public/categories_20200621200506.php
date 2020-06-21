<?php
include('../utils/utils.php');

// Sample user data for testing
$improv_users = array(1 =>
    array('user_email' => 'kamiltb@hotmail.com', 'user_password' => sha1('misio')),
    array('user_email' => 'test@hotmail.com', 'user_password' => sha1('misio1'))
);

// Check if user exists in the array of improv_users
function validate_user($email, $user_password) {

    global $improv_users;

    $user_password = sha1($user_password);

    foreach($improv_users as $id => $record) {
        if($record['user_email'] == $email && $record['user_password'] == $user_password) {
            return $id;
        }
    }
    return false;
}

// Check if current user's ID is cached
if(!isset($_SESSION['current_user'])) {
    $_SESSION['current_user'] = 0;
}
dumb($_SESSION);
// If user is already logged in then show message
if($_SESSION['current_user'] > 0) {
    echo 'You are logged in';
}

// User login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($id = validate_user($_POST['user_email'], $_POST['user_password']) !== false) {
        $_SESSION['current_user'] = $id;
        echo 'Hey';
    }
}