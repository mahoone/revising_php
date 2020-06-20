<?php

$values = ($_SERVER);

if($values != '') {
    foreach($values as $value[$i] => $valueData) {
        echo '<ul>';

        echo '<li>'.$value.' '.$valueData.'</li>';

        echo '</ul>';
    }
}
