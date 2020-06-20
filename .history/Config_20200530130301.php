<?php

class User {

private $_username;

   public function setUsername($username)
   {
       $this->_username = $username;
   }

   public function getUsername()
   {
       return $this->_username;
   }

}

$kamil = new User;

$kamil->setUsername('Kamil');

$kamil->getUsername();

echo 'Zmienna pochodzi z Config.php '.$kamil->getUsername().'<br/>';