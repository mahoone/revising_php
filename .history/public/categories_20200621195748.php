<?php
include('../utils/utils.php');

// User visit counter
echo '<div class="alert alert-primary" style="position: fixed; bottom: 0; width: 100%;" role="alert">
  <?php visit_counter(); ?>
</div>';

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
            echo $id;
        }
    }
    return false;
}

// Check if current user's ID is cached
if(!isset($_SESSION['current_user'])) {
    $_SESSION['current_user'] = 0;
}

// If user is already logged in then show message
if($_SESSION['current_user'] > 0) {
    echo 'Hey there';
}

// User login
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    validate_user('test@hotmail.com', 'misio1');
}