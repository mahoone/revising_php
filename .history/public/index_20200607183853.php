<?php

function getUserVisitCount()
{
    $visitor = getenv('REMOTE_ADDR'); 
    return $visitor;
}

function saveVisits() 
{
    $visit = array();

    foreach($visit as $id => $visitNumber)
    {
        return getUserVisitCount().' '.$id.' '.$visitNumber;
    }
}

echo saveVisits();



