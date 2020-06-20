<?php

function findNumber(array $seq) : int

{
    $numbers = array_count_values($seq);

    echo $numbers;
}