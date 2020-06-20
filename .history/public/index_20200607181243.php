<?php

function getUserVisitCount()
{
    $visitor = $_SESSION.$user;
    return $visitor;
}

echo getUserVisitCount();

