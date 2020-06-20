<?php

function getUserVisitCount()
{
    $visitor = $_SERVER['REMOTE_ADDR'];
    $forwarded = $_SERVER['HTTP_X_FORWARDED_FOR'];
    return $visitor.$forwarded;
}

echo getUserVisitCount();

