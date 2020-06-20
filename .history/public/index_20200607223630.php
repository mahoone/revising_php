<?php

$values = ($_GET);

if($values != '') {
    foreach($values as $value => $valueData) {
        echo '<ul>';
        echo '<li>'.$value.' '.$valueData.'</li>';
        echo '</ul>';
    }
}

