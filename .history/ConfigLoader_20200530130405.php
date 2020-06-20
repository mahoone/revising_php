<?php

require('./Config.php');

function modifyUsername($newuser){
    $newuser->username = 'Witos';
}

$witos = new User;

$witos->setUsername('Witos Kamil');
modifyUsername($witos);

echo 'Zmienna pochodzi z ConfigLoader.php - '.$witos->getUsername().'<br/>';