<?php
session_start();
include 'dbattributes.php';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'orders';
echo $_SESSION['orderNumber'];
$stmt = "UPDATE $table WHERE orderNumber='" . $_SESSION['orderNumber'] . "'";
$dbh->query($stmt);
$_SESSION['orderNumber'] = NULL;
header('Location: order_page.php');
?>
