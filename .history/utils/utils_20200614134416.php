<?php

function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function output_data() {
    if(isset($_POST['user_input'])) {
        return echo $user_value = $_POST['user_input'];
    }
}