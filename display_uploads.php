<?php
include 'dbattributes.php';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$table = 'user';
$stmt = "SELECT * from $table where storeNumber=".$_SESSION['storeNumber'];
$result = $dbh->query($stmt);
$arr = $result->fetchall(PDO::FETCH_ASSOC);
if (isset($arr[0]['outletNumber']) && $arr[0]['outletNumber'] != NULL) {
  $_SESSION['outletNumber'] = $arr[0]['outletNumber'];
} else {
  $_SESSION['outletNumber'] = 'Outlet number needs to be set.';
}

$table = 'orders';
$stmt = "SELECT * from $table where storeNumber=".$_SESSION['storeNumber'];
$result = $dbh->query($stmt);
$arr = $result->fetchall(PDO::FETCH_ASSOC);
echo "<ul style='list-style:none;'>";
foreach ($arr as $entry) {
  echo "<li><a href='".$_SERVER['PHP_SELF']."?orderNumber=".$entry['orderNumber']."'>".$entry['orderDate']."</a></li>";
}
echo "</ul>";
?>
