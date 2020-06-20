<?php

function getUserVisitCount($user)
{
    $visitor = $_SESSION.$user;
    return $visitor;
}

