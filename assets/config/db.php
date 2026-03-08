<?php
//inställningar för databasen
#$host = 'mysql'; 
$dbname = 'codespaces'; 
#$username = 'root';
#$password = 'root';
$host = 'localhost';
$username = $MYSQL_USER = getenv('MYSQL_USER');
$password = $MYSQL_PASSWORD = getenv('MYSQL_PASSWORD');

$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>