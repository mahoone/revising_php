<?php

// User
class User {

    protected $user_name;
    protected $user_password;

    public function __construct($name) {
        $this->user_name = $name;
    }

    // public function setUserName($name) {
    //     $this->user_name = $name;
    // }

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
class UserAddons extends User {

    protected $user_age;

    public function __construct($name = null, $userAge) { 
        parent::__construct($name);
        $this->user_age = $userAge;
    }

    public function getUserAge() {
        return $this->user_age;
    }

    public function showUserData() {
        echo '<p>Username:</p>'.$this->getUserName().'<p>Age:</p>'.$this->getUserAge();
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
               return date('d.m.Y, H:i', $_COOKIE['visit_no']);
           }
        }
    }
}

// Example of an Abstract Class and extending Class

abstract class Posts {

    public abstract function getPostId();

}

class PublicPosts extends Posts {

    protected $post_id;

    public function __construct($post_id) {
        $this->post_id = $post_id;
    }

    public function getPostId() {
        return $this->post_id;
    }
}

$post1 = new PublicPosts;





