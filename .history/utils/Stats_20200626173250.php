<?php

// Log visitor data from current session
class Visitor {

    private $visit_count = 0;

    public function __visit($visit) {
        $this->visit_count = $visit;
    }

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] == 0;
            
        }
        $_SESSION['last_visit']++;
        
    }

}

$user1 = new Visitor;

echo $user1->visitCounter();