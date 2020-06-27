<?php

// Log visitor data from current session
class Visitor {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] = 0;
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
               echo 'You visited this page on '.date('d.m.Y, H:i', $_COOKIE['visit_no']);
           }
        }
    }
}

$visitor = new Visitor;

$visitor->setUserCookies();

$visitor->visitCounter();


