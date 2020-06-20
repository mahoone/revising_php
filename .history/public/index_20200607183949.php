<?php

function getUserVisitCount()
{
    $visitor = getenv('REMOTE_ADDR'); 
    return $visitor;
}

function saveVisits() 
{
    $visit = array();

    $visit = getUserVisitCount();
}

echo saveVisits();



