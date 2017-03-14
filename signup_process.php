<?php
include 'dbattributes.php';
include 'user.class.php';

$user = new User($_POST["username"], $_POST["first_name"], $_POST["last_name"],
                $_POST["email"], $_POST["password"], $_POST["store_number"],
                $_POST["order-day"], $_POST["delivery-day"]);

$table = 'user';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$values = $user->dbvalues();
echo "$user";
echo "<p>$values</p>";

$stmt = "INSERT INTO $table (username, firstName, lastName, email, password, storeNumber, orderDay, deliveryDay, creationDate) VALUES ($values)";

$conn->exec($stmt);
?>
