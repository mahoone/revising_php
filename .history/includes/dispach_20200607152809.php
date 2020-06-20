<?php
function dispatchAction($action)
{
   if(!ctype_alpha($action))
   {
      displayError('Nazwa akcji zawiera nieprawidłowe znaki.');
   }
   if(!file_exists('../actions/'.$action.'.php'))
   {
      displayError('Podana akcja nie istnieje.');
   }
   require_once('../actions/'.$action.'.php');
   $action .= 'Action';

   $action();
} // end dispatchAction();