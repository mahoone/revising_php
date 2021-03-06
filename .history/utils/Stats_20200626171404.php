<?php

// Log visitor data from current session
class Visitor {

    private $visit_count = 0;

    public function __visit($visit) {
        $this->visit_count = $visit;
    }

    public function visitCount() {
        if($_SESSION['last_visit'] == '') {
            $_SESSION['last_visit'] == 0;
        }
        $_SESSION['last_visit']++;
    }

}