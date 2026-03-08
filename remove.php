<?php
//BOKENS INSTRUKTIONER

//upprättar koppling till databasen
require_once 'assets/config/db.php';
//RADERAR poster i databasen
require_once 'assets/functions/delete.php';

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

<form action="remove.php?id=<?php echo $row['id']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" name="delete">Radera</button>
    <button type="submit" name="cancel">Avbryt</button>
</form>


<!--här under fortsätter html (se sida 194 i boken)-->

