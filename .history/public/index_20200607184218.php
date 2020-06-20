<?php

function saveVisits() 
{
    
    $visit[] = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        echo 'hey';
    }
}

echo saveVisits();



