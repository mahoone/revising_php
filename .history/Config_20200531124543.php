<?php
if(count($_POST) == 2)
{
   echo 'Witaj, '.$_POST['imie'].' '.$_POST['nazwisko'].'!';
}
else
{
   echo 'Nieprawidłowa liczba parametrów!';
}