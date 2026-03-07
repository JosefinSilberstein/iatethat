<?php 
require_once '../config/db.php';

$sql = "DELETE FROM recipes WHERE id = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$_POST['id']]);