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

echo $audimodel;




