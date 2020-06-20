<?php

class Car {
    private $_model;

    public function setCarModel($model) {
        $this->_model = $model;
    }

    public function getCarModel() {
        return $this->_model;
    }
}

$audi = new Car;

$audi->setCarModel('Audi');

$audimodel = $audi->getCarModel();

function showAudiModel($audimodel) {
    echo '<ul>';
    foreach($model => $wartosc) {
        echo '<li>'.$wartosc.'</li>';
    }
    echo '</ul>';
}






