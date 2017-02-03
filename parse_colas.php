<html lang='en'>
<head>
  <meta charset="utf-8">
<?php

include 'product.php';

$files = ["data/20170108 - ConsolidatedInventoryUsage.txt",
"data/20170115 - ConsolidatedInventoryUsage.txt",
"data/20170122 - ConsolidatedInventoryUsage.txt"];

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

   if (strpos($line, $parse) == True) {

     $arr = explode("\t", $line);

     if (strpos($arr[0], $big) == True) {
       $size = '2-Liter';
       $quantity = 8;
     } elseif (strpos($arr[0], $small) == True) {
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

     $products[$i] = new Product($arr[0], $size, $quantity, $arr[3], $arr[7], $arr[8], $arr[9], $arr[13]);

     $i++;
   }
 }

 $weeks[$j] = $products;
 $j++;

 fclose($file_handle);
}

foreach ($weeks as $products) {
  echo "<table style='text-align:center;'>";
  echo "<tr><td>Product Name</td><td>Size</td><td>Quantity per case</td><td>Unit Cost</td><td>Current Inventory</td><td>Actual Usage</td><td>Ideal Usage</td><td>Actual Percent Vs Ideal</td></tr>";

  foreach ($products as $product) {
    $name = $product->getProductName();
    $size = $product->getSize();
    $number = $product->getQuantity();
    $cost = $product->getUnitCost();
    $current = $product->getCurrentInventory();
    $actual = $product->getActualUsage();
    $ideal = $product->getIdealUsage();
    $percent = $product->getActualVsIdeal();
    echo "<tr>";
    echo "<td>$name</td><td>$size</td><td>$number</td><td>$cost</td><td>$current</td><td>$actual</td><td>$ideal</td><td>$percent</td>";
    echo "</tr>";
  }
  
  echo "</table><br>";
}


/*
$lines  = file('data/20161225 - ConsolidatedInventoryUsage.txt');
foreach($lines as $line) {
   echo "<p>$line</p>";
   $arr = explode("\n", $line);
     echo "<p>";
     foreach ($arr as $ele) {
       $i = explode("\t", $ele);
       echo '<p>';
       foreach ($i as $j) {
         $k = explode(" ", $j);
         echo '<p>';
          foreach ($k as $l) {
              echo "<p>$l</p>";
              }
         echo '</p>';
       }
       echo '</p>';
     }
     echo "</p>";
}


// Setting the file path for the data.
$file  = 'data/20161225 - ConsolidatedInventoryUsage.txt';
// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote('Colas', '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
preg_match_all($pattern, $contents, $matches);

foreach  ($matches as $match) {
  $string = implode($match);
  //$arr = explode("\n", $string);
  //echo "<p> $string </p>";
  echo '<p>';
  //foreach ($arr as $ele) {
    $pieces = explode("\t", $string);
    foreach ($pieces as $piece) {
      echo "<p>$piece</p>";
    }
  //}
  echo '</p>';
}

*/

?>

</head>
</html>