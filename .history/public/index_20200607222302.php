<?php

$values = ($_SERVER);

if($values != '') {
    foreach($values as $value => $valueData) {
        $requestTime = $values['REQUEST_TIME'];
        echo '<ul>';
        echo '<li>'.$value.' '.$valueData.'</li>';
        echo '</ul>';
    }
}

echo gmdate("D-m-y\HH:i:s", $requestTime);