<?php

// BOKENS INSTRUKTIONER 

//upprättar koppling till databasen
require_once 'assets/config/db.php';
//uppdaterar poster i databasen
require_once 'assets/functions/update.php';

//kontrollerar om GET-variabeln id finns och inte är tom
if (isset($_GET['id'])) { 
//skapar, förbereder och binder förfrågan med GET-variabeln id
$sql= "SELECT * FROM recipes WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

//lägger alla colmner i $row
$row = $stmt->fetch(PDO::FETCH_ASSOC);



//skickar användaren till startsidan
if (!$row) {
header('Location: index.php');
}

} else {
    header('Location: index.php');
}
?>


<form action="edit.php?id=<?php echo $row['id']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

   <input type="text" name="recipe_title" value="<?php echo $row['title']; ?>">
   <input type="text" name="recipe_desc" value="<?php echo $row['description']; ?>">
   <input type="number" name="cook_time" value="<?php echo $row['cook_time']; ?>">
   <input type="text" name="ing1" value="<?php echo $row['ing1']; ?>">
   <input type="text" name="ing2" value="<?php echo $row['ing2']; ?>">
   <input type="text" name="ing3" value="<?php echo $row['ing3']; ?>">
   <input type="text" name="ing4" value="<?php echo $row['ing4']; ?>">
   <input type="text" name="ing5" value="<?php echo $row['ing5']; ?>">
   <button type="submit" name="update">Uppdatera</button>

</form>

<!-- här under fortsätter html (se sida 184 i boken) -->
