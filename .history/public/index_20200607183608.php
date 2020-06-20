<?php

function getUserVisitCount()
{
    $visitor = getenv('REMOTE_ADDR'); 
    return $visitor;
}

function saveVisits() 
{
    $visit = array();
}



