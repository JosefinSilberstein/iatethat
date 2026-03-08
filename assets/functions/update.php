<?php 

//BOKENS INSTRUKTIONER
//kontrollera om uppdatera-knappen har klickats
if (isset($_POST['update'])) {

    //skapar förfrågan för att uppdatera specifik post i databasen
    $sql = "
    UPDATE recipes
     SET title = :title, 
     description = :description,
     cook_time = :cook_time,
     ing1 = :ing1,
     ing2 = :ing2,
      ing3 = :ing3,
       ing4 = :ing4,
        ing5 = :ing5
     WHERE id = :id";

//förbereder frågan till databasen
$stmt = $dbh->prepare($sql);
//binder ihop behhållare med information från formuläret

$stmt->bindValue(':title', $_POST['recipe_title']);
$stmt->bindValue(':description', $_POST['recipe_desc']);
$stmt->bindValue(':cook_time', $_POST['cook_time']);
$stmt->bindValue(':ing1', $_POST['ing1']);
$stmt->bindValue(':ing2', $_POST['ing2']);
$stmt->bindValue(':ing3', $_POST['ing3']);
$stmt->bindValue(':ing4', $_POST['ing4']);
$stmt->bindValue(':ing5', $_POST['ing5']);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

//kontrollerar om frågan har ekekverats framgångsrikt och skickar användaren till startsidan
if ($stmt->execute()) {
    header('Location: ../../index.php?update=true');} 
} 
?>

