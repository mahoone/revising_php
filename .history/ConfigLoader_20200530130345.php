<?php

require('./Config.php');

function modifyUsername($newuser){
    $newuser->username = 'Witos';
}

$witos = new User;

$witos->setUsername('WitosKamil');
modifyUsername($witos);
echo $witos->getUsername();
echo 'Zmienna pochodzi z ConfigLoader.php - '.$witos->getUsername().'<br/>';