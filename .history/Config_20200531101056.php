<?php

function imap_open(){

}

if(extension_loaded('imap_open'))
{
   echo 'IMAP dostępny';
}
else
{
   echo 'IMAP niedostępny';
}