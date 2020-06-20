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

$audi->setCarModel('Audi2');

$audimodel = $audi->getCarModel();

function showAudiModel($carmodel) {
    echo $carmodel;
}

showAudiModel($audimodel);





