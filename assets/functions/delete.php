<?php 
require_once '../config/db.php';

//BOKENS INSTRUKTIONER
if (isset($_POST['cancel'])) {
    //skickar användaren till startsidan
    header('Location: ../../index.php');}

//kontrollera om radera-knappen har klickats
if (isset($_POST['delete'])) {
    //skapar förfrågan för att radera specifik post i databasen
    $sql = "DELETE FROM recipes 
    WHERE id = :id";

//förbereder frågan till databasen
$stmt = $dbh->prepare($sql);

//binder ihop behållare med information från formuläret
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
//konrollerar om frågan har ekekverats framgångsrikt och skickar användaren till startsidan
if ($stmt->execute()) {
    header('Location: ../../index.php?delete=true');
} 
} 
?>