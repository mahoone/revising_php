<?php

$values = ($_SERVER);

if($values != '') {
    foreach($values as $value => $valueData) {
        echo '<ul>';

        echo '<li>'.$value['REQUEST_TIME'].' '.$valueData.'</li>';

        echo '</ul>';
    }
}
