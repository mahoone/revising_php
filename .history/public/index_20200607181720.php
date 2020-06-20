<?php

function getUserVisitCount()
{
    $visitor = $_SERVER['HTTP_CLIENT_IP'];
    return $visitor;
}

echo getUserVisitCount();

