<?php

class Car {
    public $color;
    public $model;
    public function _construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a ". $this->color . " " . $this->model . "!";
    }
}

