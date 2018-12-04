<?php

declare(strict_types = 1);

final class VehicleManager {

    private $_db;

    public function __construct(PDO $db) {
      $this->setDb($db);
    }

    public function setDb(PDO $db) {
        $this->_db = $db;
        return $this;
    }

    public function getDb() {
        return $this->_db;
    }

    public function getVehicles() {
        $arrayOfVehicles = [];

        $query = $this->getDb()->query("SELECT * FROM vehicles");

        // while ($data = $query->fetch())
        // {
        //   if ($data['type'] === "motorbike")
        //   {
        //     $arrayOfVehicles[] = new Motorbike($data);
        //   }
        //   else if ($data['type'] === "car")
        //   {
        //     $arrayOfVehicles[] = new Car($data);
        //   }
        //   else if($data['type'] === "truck")
        //   {
        //     $arrayOfVehicles[] = new Truck($data);
        //   }
        // }

        $dataVehicles = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataVehicles as $dataVehicle) {

            if ($dataVehicle['type'] === "motorbike") {
                $arrayOfVehicles[] = new Motorbike($dataVehicle);

            } else if ($dataVehicle['type'] === "car") {
                $arrayOfVehicles[] = new Car($dataVehicle);

            } else if ($dataVehicle['type'] === "truck") {
                $arrayOfVehicles[] = new Truck($dataVehicle);
            }
        }

        return $arrayOfVehicles;
    }

    public function getVehicle(int $id) {
        $query = $this->getDb()->prepare("SELECT * FROM vehicles WHERE id = :id");
        $query->execute([
            "id" => $id
        ]);



    }

    public function add() {

    }

    public function update() {

    }

    public function delete() {

    }

}
