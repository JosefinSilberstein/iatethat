<?php 
require_once '../config/db.php';

$sql = "UPDATE recipes SET title = ?, description = ?, cook_time = ?, ing1 = ?, ing2 = ?, ing3 = ?, ing4 = ?, ing5 = ? WHERE id = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$_POST['recipe_title'], $_POST['recipe_desc'], $_POST['cook_time'], $_POST['ing1'], $_POST['ing2'], $_POST['ing3'], $_POST['ing4'], $_POST['ing5'], $_POST['id']]);