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

    public function setUserCookies() {
        if(!isset($_COOKIE['vist_no'])) {
            setcookie('visit_no', time(), time() + 30 * 86400);
            echo 'Hey there!';
        }
        else {
            setcookie('visit_no', time(), time() + 30 * 86400);
            echo 'Welcome back! Your last visit: '. date('d.m.Y, H:i', $_COOKIE['visit_no']);
        }
    }
}

$visitor = new Visitor;

$visitor->setUserCookies();

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

$user1->setUserId('Kamil');

echo $user1->getUserId();