<?php
include('../utils/utils.php');
// User login

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['user_email'];
}