<?php

// Log visitor data from current session
class Visitor {

    private $visit_count = 0;

    public function __visit() {
        $this->visit_count = $visit;
    }

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

    private $user_id = 0;
    private $user_name;

    public function setUserId($user) {
        $this->user_id = $user;
    }

    public function getUserId() {
        return $user;
    } 
}

$user1 = new User;

echo $user1->setUserId('1').getUserId();