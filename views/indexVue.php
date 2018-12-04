<?php
  include("template/header.php");
 ?>

<form action="controllers/index.php" method="post">
  <legend>Ajouter un véhicule :</legend>
  <label for="type">Type de véhicule :</label>
  <select id="type" name="type" id="type" required>
    <option selected value="car">Voiture</option>
    <option value="motorbike">Moto</option>
    <option value="truck">Camion</option>
  </select>
  <br>
  <label for="brand">Marque :</label>
  <input id="brand" name="brand" type="text" placeholder="Renault" required>
  <br>
  <label for="model">Modèle :</label>
  <input id="model" name="model" type="text" placeholder="Zoé" required>
  <br>
  <label for="color">Couleur :</label>
  <input id="color" name="color" type="text" placeholder="Bleu" required>
  <br>
  <label for="numberDoors">Nombre de portes* :</label>
  <input id="numberDoors" name="numberDoors" type="text" placeholder="5">

  <p>*Seulement pour les voitures.</p>

</form>

<div id="vehicles">
  <?php
  foreach($vehicles as $vehicle) {
    ?>
    <div class="vehicle">
      <p><?php echo ucfirst($vehicle->getType()); ?></p>
      <p><?php echo ucfirst($vehicle->getBrand()) . " " . ucfirst($vehicle->getModel()); ?></p>
      <p><?php echo ucfirst($vehicle->getColor());
         if ($vehicle->getType() === "car") {
           echo ", " . $vehicle->getNumberDoors() . " portes";
         }
      ?></p>
    </div>
    <?php
  }
  ?>
</div>
 <?php

   include("template/footer.php");
  ?>
