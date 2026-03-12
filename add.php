


<?php

// BOKENS INSTRUKTIONER
//upprättar koppling till databasen
require_once 'assets/config/db.php';
//lägger till poster i databasen
require_once 'assets/functions/insert.php';

//här till nästa kommentar (rad 25) läggs html in (se sida 171 i boken)

// <doctype html>











 

//kontrollerar om en variabel existerar
if (isset($success)) {
  echo 
  '<div class="alert alert-success">
    <strong>Receptet har lagts till!</strong> Dags att dela det med världen.
  </div>';
  } 
  ?>

<!-- här under fortsätter html -->