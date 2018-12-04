<?php

function chargerClasse($classname)
{
    if(file_exists('../model/'. $classname.'.php'))
    {
        require '../model/'. $classname.'.php';
    }
    else
    {
        require '../entities/' . $classname . '.php';
    }
}

spl_autoload_register('chargerClasse');


$db = Database::DB();
$vehicleManager = new VehicleManager($db);

$vehicles = $vehicleManager->getVehicles();
include "../views/indexVue.php";

 ?>
