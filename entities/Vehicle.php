<?php

declare(strict_types = 1);

abstract class Vehicle {

    protected $id,
              $type, /* -> car, motorbike or truck */
              $brand,
              $model,
              $color;

    public function __construct(array $data = []) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {

        foreach ($data as $key => $value) {

            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Setters
    public function setId($id) {
      $id = (int) $id;
        $this->id = $id;
        return $this;
    }

    public function setType(string $type) {
        $this->type = $type;
        return $this;
    }

    public function setBrand(string $brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setModel(string $model) {
        $this->model = $model;
        return $this;
    }

    public function setColor(string $color) {
        $this->color = $color;
        return $this;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getType() {
        return $this->type;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

}
