<?php

$values = ($_GET);

if($values != '') {
    foreach($values as $value => $valueData) {
        $requestTime = $values['REQUEST_TIME'];
        echo '<ul>';
        echo '<li>'.$value.' '.$valueData.'</li>';
        echo '</ul>';
    }
}

