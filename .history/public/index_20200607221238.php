<?php

$values = ($_SERVER);
var_dump($values);

if($values != '') {
    foreach($values as $value => $valueData) {
        echo '<ul>';

        echo '<li>'.$value.' '.$valueData.'</li>';

        echo '</ul>';
    }
}
