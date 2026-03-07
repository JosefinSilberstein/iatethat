<?php 
require_once '../config/db.php';

$sql = "SELECT * FROM recipes";
$stmt = $dbh->prepare($sql);
$stmt->execute();