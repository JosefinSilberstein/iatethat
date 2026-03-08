<?php 
/**
 * CREATE - Lägg till ny måltid
 * TODO: Byt ut till riktig databaskoppling från Person A
 */

//placeholder - ska bytas ut mot riktig databasuppkoppling ERIK
require_once __DIR__ . '/../config/db.php';


// PERSON C behöver vweta att jag skickar i JSON-format
header('Content-Type: application/json');

//Validera inmatad information
 if(isset($_POST))

    

//Hämta data från formuläret (ingredienser, titel, beskrivning, tillagningstid)
$recipe_title = $_POST['recipe_title'];
$recipe_desc = $_POST['recipe_desc'];
$cook_time = $_POST['cook_time'];
$ing1 = $_POST['ing1'];
$ing2 = $_POST['ing2'];
$ing3 = $_POST['ing3'];
$ing4 = $_POST['ing4'];
$ing5 = $_POST['ing5'];



$sql = "INSERT INTO recipes (title, description, cook_time, ing1, ing2, ing3, ing4, ing5) 
VALUES (:title, :description, :cook_time, :ing1, :ing2, :ing3, :ing4, :ing5)";
$stmt = $dbh->prepare($sql);
$stmt->execute([
    ':title' => $recipe_title,
    ':description' => $recipe_desc,
    ':cook_time' => $cook_time,
    ':ing1' => $ing1,
    ':ing2' => $ing2,
    ':ing3' => $ing3,
    ':ing4' => $ing4,
    ':ing5' => $ing5
]);


// BOKENS INSTRUKTIONER 
//Skriva funktionaliteter som sparar information i databasen

//kontrollera om lägg till-knappen har klickats
if (isset($_POST['submit'])) {
    //skapar förfrågan att för att lägga till poster
    $sql = "INSERT INTO recipes (title, description, cook_time, ing1, ing2, ing3, ing4, ing5) 
    VALUES (:title, :description, :cook_time, :ing1, :ing2, :ing3, :ing4, :ing5)
    ";
    //förebereder frågan till databasen
    $stmt = $dbh->prepare($sql);
    //binder ihop behållare med information från formuläret
    $stmt->bindValue(':title', $_POST['recipe_title']);
    $stmt->bindValue(':description', $_POST['recipe_desc']);
    $stmt->bindValue(':cook_time', $_POST['cook_time']);
    $stmt->bindValue(':ing1', $_POST['ing1']);
    $stmt->bindValue(':ing2', $_POST['ing2']);
    $stmt->bindValue(':ing3', $_POST['ing3']);
    $stmt->bindValue(':ing4', $_POST['ing4']);
    $stmt->bindValue(':ing5', $_POST['ing5']);
    
    //skickar frågan till databasen
    if ($stmt->execute()) {
        $success = "true";
        } 
        }