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
$randomnumber = (array(rand(0, 21)));
echo findIt();