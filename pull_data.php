<?php
function pull($order) {
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'orders';
$stmt = "SELECT COLUMN_NAME FROM information_schema.columns WHERE table_schema='".DBNAME."' AND table_name='$table' AND COLUMN_NAME LIKE 'c%'";
$result = $dbh->query($stmt);
$arr = $result->fetchall(PDO::FETCH_ASSOC);
$columns="";
foreach ($arr as $value) {
  $columns = $columns . $value["COLUMN_NAME"] .", ";
}
$columns = rtrim($columns, ", ");
$stmt = "SELECT $columns from $table where orderNumber='$order'";
$result = $dbh->query($stmt);
$arr = $result->fetchall(PDO::FETCH_ASSOC);
return $arr;
}
?>
