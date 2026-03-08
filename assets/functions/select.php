<?php 
require_once '../config/db.php';


// BOKENS INSTRUKTIONER 
//skapar förfrågan för att hämta allt från tabellen recipes
$sql = "SELECT * FROM recipes";
//förbereder frågan till databasen
$stmt = $dbh->prepare($sql);
//skickar frågan till databasen
$stmt->execute();   
