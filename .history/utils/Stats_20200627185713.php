<?php

// User
class User {

    private $user_name;
    private $user_password;

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
        echo '<input type="text" name="'.$this->getUserName().'"value="'.htmlspecialchars($this->getUserPassword()).'" />';
    }
}

// Log visitor data from current session
class Visitor {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] = 0;
            echo '<p>'.'Welcome!'.'</p>'.'<br/>';
        }
        $_SESSION['last_visit']++;
    }

    public function setUserCookies() {
       setcookie('visit_no', time(), time() + 30* 86400);{
           if(!isset($_COOKIE['visit_no'])) {
               echo 'You are a quest'.'<br/>';
           }
           else {
               echo '<p>'.'You visited this page on '.date('d.m.Y, H:i', $_COOKIE['visit_no']).'</p>'.'<br/>';
           }
        }
    }

    public function displayVisitorData() {
        echo 'Hey! It is your '.$_SESSION['last_visit'].' visit!';
    }
}





