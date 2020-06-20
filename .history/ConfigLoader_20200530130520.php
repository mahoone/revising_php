<?php

require('./Config.php');

function modifyUsername($object){
    $newuser->username = 'Witos';
}

$witos = new User;

$witos->setUsername('Witos Kamil');
modifyUsername($witos);

echo 'Zmienna pochodzi z ConfigLoader.php - '.$witos->getUsername().'<br/>';