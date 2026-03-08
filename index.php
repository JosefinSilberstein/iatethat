<?php


// BOKENS INSTRUKTIONER


//upprättar koppling till databasen
require_once 'assets/config/db.php';


//Hämtar poster från databasen
$sql = "SELECT * FROM recipes";
$stmt = $dbh->prepare($sql);
$stmt->execute();
?>

<!--mellan kommande kommentarer ska DOCTYPE och html-kod in (se sida 176 i boken)
här under fortsätter html (se sida 176 i boken) -->










<!--slut html-->
<?php 
//kontrollerar om det finns poster
if ($stmt->rowCount() > 0) {
    //skriver ut alla poster
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '
      <tr>
            <td>' . $row['title'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>' . $row['cook_time'] . '</td>
            <td>' . $row['ing1'] . '</td>
            <td>' . $row['ing2'] . '</td>
            <td>' . $row['ing3'] . '</td>
            <td>' . $row['ing4'] . '</td>
            <td>' . $row['ing5'] . '</td>
        <td>
        <a href="edit.php?id=' . $row['id'] . '">
        <i class="glyphicon glyphicon-pencil"></i>
        </a>
        </td>
        <td>
       <a href="remove.php?id=' . $row['id'] . '">
        <i class="glyphicon glyphicon-remove"></i>
        </a>
        </td>
        </tr>
        ';
      



    }
} else {
    echo '<tr><td colspan="10">Inga poster hittades</td>
    </tr>
    ';
}

//kontrollerar om en variabel exsisterar
if (isset($_GET['delete'])) {
    echo '<div class="alert alert-danger">Receptet har raderats</div>';
}

?>

<!-- här under fortsätter html (se sida 176 i boken) -->