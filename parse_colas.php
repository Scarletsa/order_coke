<html lang='en'>
<head>
  <meta charset="utf-8">
<?php
session_start();
include 'dbattributes.php';
include 'product.class.php';
include 'util.php';
include 'scan.php';
include 'logout_header.php';

$files = [];

for ($i=0; $i<3; $i++) {
  $files[] = 'userdata/'.$_SESSION['storeNumber'].'/'.$_SESSION['files'][$i];
}

$beginDate = 'Begin Date:';
$parse = 'Colas';
$big = 'iter';
$small = 'oz';

$weeks = [];
$j = 0;

foreach ($files as $file) {
$file_handle = fopen($file, "r");

$products = [];
$i = 0;

while (!feof($file_handle)) {
   $line = fgets($file_handle);

   if (strpos($line, $beginDate)) {
     $arr = explode("\t", $line);
     $date = $arr[4];
   } elseif (strpos($line, $parse)) {
     $arr = explode("\t", $line);
     if (strpos($arr[0], $big)) {
       $size = '2-Liter';
       $quantity = 8;
     } else {
       $size = '20oz';
       $quantity = 24;
     }
     /*
     $product_name = $arr[0];
     $unit_cost = $arr[3];
     $current_inventory = $arr[7];
     $actual_usage = $arr[8];
     $ideal_usage = $arr[9];
     $actual_vs_ideal_usage = $arr[13];
     */
     $key = explode(" ", $arr[0]);

     $keyString = "";

     foreach ($key as $word) {
      if (strpos($word, 'ottle') != True && (($word == 'oz') != True && strpos($word, 'oz') != True) && strpos($word, 'iter') != True && is_numeric($word) != True) {
        $keyString = "$keyString $word";
      }
     }

     $keyString = "$keyString $size";

     $keyString = trim($keyString);

     $products[$keyString] = new Product($arr[0], $size, $quantity, $arr[3], $arr[7], $arr[8], $arr[9], $arr[13]);

     $i++;
   }
 }

 ksort($products);
 $weeks[$j] = $products;
 $j++;

 fclose($file_handle);
}

order_estimate($weeks);
?>

</head>
</html>
