<?php

function findIt(array $seq) : int

{

    $nums = array_count_values($seq);

    foreach ($nums as $key => $val) {

      if ($val % 2) {

        return $key;

      }

    }

}

findIt(array(2,4,5,6,4));