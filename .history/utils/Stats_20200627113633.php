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
       setcookie('visit_no', time(), time() + 30* 86400);{
           if(!isset($_COOKIE['visit_no'])) {
               echo 'You are a quest';
           }
           else {
               echo 'You have been here before!'; 
           }
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

echo '<br/>'.$user1->getUserId();