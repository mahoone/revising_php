<?php

function saveVisits() 
{
    static $visit = array();
    $visit = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        
    }
}

echo saveVisits();



