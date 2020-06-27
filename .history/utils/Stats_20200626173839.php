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

$user1 = new Visitor;

echo $user1->visitCounter();