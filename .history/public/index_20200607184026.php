<?php

function saveVisits() 
{
    $visit = array();

    $visit = getenv('REMOTE_ADDR'); 

    return $visit;
}

echo saveVisits();



