<?php

function getUserVisitCount()
{
    $visitor = $_SERVER['REMOTE_ADDR'];
    return $visitor;
}

echo getUserVisitCount();

