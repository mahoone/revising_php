<?php

function getUserVisitCount()
{
    $visitor[] = getenv('REMOTE_ADDR');
    $forwd = getenv('HTTP_X_FORWARDED_FOR');
    return $visitor;
}

var getUserVisitCount();

