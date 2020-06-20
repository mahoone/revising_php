<?php

$values = ($_SERVER);

if($values != '') {
    foreach($values as $value => $valueData) {
        $requestTime = $value => ('REQUEST_TIME');
        echo '<ul>';
        echo '<li>'.$value.' '.$valueData.'</li>';
        echo '</ul>';
    }
}
