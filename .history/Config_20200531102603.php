<?php

class Car {
    private $_model;

    public function setCarModel($model) {
        $this->$model = $_model;

        return $model;
    }
}

$audi = new Car;

$audi->setCarModel('Audi');