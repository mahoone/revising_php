<?php

// Log visitor data from current session
class Visitor {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] = 0;
            echo 'Welcome!'.'<br/>';
        }
        $_SESSION['last_visit']++;
        echo 'Hey! It is your '.$_SESSION['last_visit'].' visit!';
    }

    public function setUserCookies() {
       setcookie('visit_no', time(), time() + 30* 86400);{
           if(!isset($_COOKIE['visit_no'])) {
               echo 'You are a quest'.'<br/>';
           }
           else {
               echo 'You visited this page on '.date('d.m.Y, H:i', $_COOKIE['visit_no']).'<br/>';
           }
        }
    }
}

// User validation
class User {

    private $user_name;
    private $user_password;

    public function setUser($name, $password) {
        $this->user_name = $name;
        $this->user_password = $password;
    }

}

$visitor = new Visitor;

$visitor->setUserCookies();

$visitor->visitCounter();


