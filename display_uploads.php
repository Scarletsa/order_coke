<?php
include 'dbattributes.php';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'orders';
$stmt = "SELECT * from $table where storeNumber=".$_SESSION['storeNumber'];

$result = $dbh->query($stmt);
$arr = $result->fetchall(PDO::FETCH_ASSOC);
echo "<ul style='list-style:none;'>";
foreach ($arr as $whatever) {
  echo "<li><a href='".$_SERVER['PHP_SELF']."?orderNumber=".$whatever['orderNumber']."'>".$whatever['orderDate']."</a></li>";
}
echo "</ul>";
?>
