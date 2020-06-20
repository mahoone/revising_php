<?php

function dumb($var)
{
    echo '<pre>';
    dumb($var);
    echo '</pre>';
}