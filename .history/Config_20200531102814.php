<?php

class Car {
    private $_model;

    public function setCarModel($model) {
        $this->$_model = $model;
    }
}

$audi = new Car;

$audi->setCarModel('Audi');