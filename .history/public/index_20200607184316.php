<?php

function saveVisits() 
{
    
    $visit[] = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        echo $id.' '.$visitnumber;
    }
}

echo saveVisits();



