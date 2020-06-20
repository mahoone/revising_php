<?php
if(function_exists('imap_open'))
{
   echo 'IMAP dostępny';
}
else
{
   echo 'IMAP niedostępny';
}