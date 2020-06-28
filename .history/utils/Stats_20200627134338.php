<?php

// User validation
class User {

    private $user_name;
    private $user_password;

    public function setUser($name, $password) {
        $this->user_name = $name;
        $this->user_password = $password;
    }

    public function getUserName() {
        return $this->user_name;
    }

    public function getUserPassword() {
        return $this->user_password;
    }
}

// Log visitor data from current session
class Visitor extends User {

    public function visitCounter() {
        if(!isset($_SESSION['last_visit'])) {
            $_SESSION['last_visit'] = 0;
            echo '<p>'.'Welcome!'.'</p>'.'<br/>';
        }
        $_SESSION['last_visit']++;
    }

    public function setUserCookies() {
       setcookie('visit_no', time(), time() + 30* 86400);{
           if(!isset($_COOKIE['visit_no'])) {
               echo 'You are a quest'.'<br/>';
           }
           else {
               echo '<p>'.'You visited this page on '.date('d.m.Y, H:i', $_COOKIE['visit_no']).'</p>'.'<br/>';
           }
        }
    }

    public function displayVisitorData() {
        echo $this->getUserName();
        echo 'Hey! It is your '.$_SESSION['last_visit'].' visit!'.'<br/>';
    }
}

// Visitor
$visitor = new Visitor;

$visitor->setUserCookies();

$visitor->visitCounter();

$visitor->displayVisitorData();


class FormElement
{
   private $_name;
   private $_value;

   public function setName($name)
   {
      $this->_name = $name;
   } // end setName();

   public function getName()
   {
      return $this->_name;
   } // end getName();
   
   public function setValue($value)
   {
      $this->_value = $value;
   } // end setValue();

   public function getValue()
   {
      return $this->_value;
   } // end getValue();
} // end FormElement;

class FormInput extends FormElement
{
   public function display()
   {
      echo '<input type="text" name="'.$this->getName().'" value="'.htmlspecialchars($this->getValue()).'" />';
   } // end display();
} // end FormInput;

class FormTextarea extends FormElement
{
   private $_width = 60;
   private $_height = 15;

   public function setDimensions($width, $height)
   {
      if($width < 1 || $height < 1)
      {
         return false;
      }
      $this->_width = $width;
      $this->_height = $height;

      return true;
   } // end setDimensions();

   public function display()
   {
      echo '<textarea name="'.$this->getName().'" rows="'.$this->_height.'" cols="'.$this->_width.'">'.htmlspecialchars($this->getValue()).'</textarea>';
   } // end display();
} // end FormTextarea;

$fields = array();

$field = new FormInput;
$field->setName('nickname');
$field->setValue('Wpisz tu swoją nazwę');

$fields[] = $field;

$field = new FormTextarea;
$field->setName('comment');
$field->setDimensions(60, 5);

$fields[] = $field;

// Wyswietl formularz
foreach($fields as $field)
{
   $field->display();
}