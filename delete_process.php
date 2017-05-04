<?php
session_start();
include 'dbattributes.php';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'orders';
$query = $dbh->prepare("DELETE FROM $table WHERE orderNumber = :orderNumber");
$query->execute(array(":orderNumber" => $_SESSION['orderNumber']));
$_SESSION['orderNumber'] = NULL;
header('Location: order_page.php');
?>
