<?php

function saveVisits() 
{
    
    static $visit[] = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        echo 'hey';
    }
}

echo saveVisits();



