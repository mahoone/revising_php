<?php

// User
class User {

    protected $user_name;
    protected $user_password;

    public function setUserName($name) {
        $this->user_name = $name;
    }

    public function setUserPassword($password) {
        $this->user_password = $password;
    }

    public function getUserName() {
        return $this->user_name;
    }

    public function getUserPassword() {
        return $this->user_password;
    }
}

// Elements
class FormElements extends User {
    public function showUserData() {
        echo '<p>Username:</p>'.$this->getUserName().'<p>Password:</p>'.$this->getUserPassword();
    }
}

// Log visitor data from current session
class Visitor {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] = 0;
            return '<p>'.'Welcome!'.'</p>'.'<br/>';
        }
        $_SESSION['last_visit']++;
        return $_SESSION['last_visit'];
    }

    public function setUserCookies() {
       setcookie('visit_no', time(), time() + 30* 86400);{
           if(!isset($_COOKIE['visit_no'])) {
               return 'You are a quest'.'<br/>';
           }
           else {
               return 'You visited this page on '.date('d.m.Y, H:i', $_COOKIE['visit_no']);
           }
        }
    }

    public function displayVisitorData() {
        echo 'Hey! It is your '.$_SESSION['last_visit'].' visit!';
    }
}





