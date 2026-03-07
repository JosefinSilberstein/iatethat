<?php 
require_once '../config/db.php';


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