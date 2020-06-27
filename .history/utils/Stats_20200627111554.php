<?php

// Log visitor data from current session
class Visitor {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] == 0;
            echo 'Welcome!';
        }
        $_SESSION['last_visit']++;
        echo 'Hey! It is your '.$_SESSION['last_visit'].' visit!';
    }

}

// Practise class

class User {

    private $user_id;
    private $user_name;

    public function setUserId($user) {
        $this->user_id = $user;
    }

    public function getUserId() {
        return $this->user_id;
    } 
}

$user1 = new User;

$user1->setUserId('kamil');

echo $user1->getUserId();