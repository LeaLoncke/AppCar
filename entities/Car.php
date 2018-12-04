<?php

declare(strict_types = 1);

class Car extends Vehicle {

    protected $numberDoors;

    public function setNumberDoors($numberDoors) {
      $numberDoors = (int) $numberDoors;
        $this->numberDoors = $numberDoors;
        return $this;
    }

    public function getNumberDoors() {
        return $this->numberDoors;
    }



}
