<?php

function getUserVisitCount()
{
    $visitor = $_SESSION;
    return $visitor;
}

echo getUserVisitCount();
