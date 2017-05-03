<?php
session_start();
include 'dbattributes.php';
include 'order.class.php';

$order = new Order($_POST["132529"], $_POST["132530"], $_POST["132531"],
                $_POST["132532"], $_POST["132546"], $_POST["132551"],
                $_POST["132543"], $_POST["132541"], $_POST['132540'],
                $_POST['102605'], $_POST['102603'], $_POST['121751'],
                $_POST['102604'], $_POST['102656'], $_POST['114532'],
                $_POST['114230'], $_POST['102659'], $_POST['103029'],
                $_POST['112259'], $_SESSION['storeNumber'], $_SESSION['user']);

$table = 'orders';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$values = $order->dbvalues();
echo $order;
echo "<p>$values</p>";

$stmt = "INSERT INTO $table (storeNumber, user, orderDate, c132529, c132530, c132531, c132532, c132546, c132551, c132543, c132541, c132540, c102605, c102603, c121751, c102604, c102656, c114532, c114230, c102659, c103029, c112259) VALUES ($values)";

$dbh->exec($stmt);

header('Location:'.$_SERVER['HTTP_REFERER']);
?>
