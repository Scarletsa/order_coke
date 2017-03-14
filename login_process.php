<?php
include 'dbattributes.php';
$_POST['username']
$_POST['password']
$table = 'user';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = "select * from $table where username=$_POST['username'] and password=$_POST['password']";

?>
