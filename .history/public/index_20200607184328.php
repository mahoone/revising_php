<?php

function saveVisits() 
{
    
    $visit[] = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        $visitnumber .= $visitnumber++;
        echo $id.' '.$visitnumber;
    }
}

echo saveVisits();



