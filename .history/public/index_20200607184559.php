<?php

function saveVisits() 
{
    
    $visit[] = getenv('REMOTE_ADDR'); 

    foreach($visit as $id => $visitnumber)
    {
        $visitnumber .= $visitnumber++;
        return $id.' '.$visitnumber;
    }
}

printf saveVisits();



