<html lang='en'>
<head>
  <meta charset='utf-8'>
<?php

$file  = 'data/20161225 - ConsolidatedInventoryUsage.txt';
$products = ['2-Liter Coke	Colas', '2-Liter Diet Coke	Colas', '2-Liter Cherry Coke	Colas', '2-Liter Coke Zero	Colas', '2-Liter Sprite	Colas', '2-Liter Root Beer	Colas',
            '2-Liter Orange	Colas', '2-Liter Mello Yello  	Colas', '2 liter Minute Maid Lemonade	Colas', '20oz Coke Bottle	Colas', '20oz Diet Coke Bottle	Colas',
            '20oz Cherry Coke Bottle	Colas', '20oz Coke Zero	Colas', '20oz Root Beer Bottle	Colas', '20oz Sprite Bottle	Colas', '20oz Orange Bottle	Colas',
            '20 oz Mello Yello Bottle	Colas', '20 oz bottle Minute Maid Lemonade 	Colas', '20oz Water Bottle	Colas'];

$actual_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
            '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
            '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
            '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

$ideal_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
            '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
            '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
            '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

$actual_vs_ideal_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
            '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
            '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
            '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

$current_inventory = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
            '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
            '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
            '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];



// the following line prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');

foreach($products as $product) {
// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($product, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   $temp = implode($matches[0]);
   $arr = explode("\t", $temp);
   $current_inventory[$product] = $arr[7];
   $actual_usage[$product] = $arr[8];
   $ideal_usage[$product] = $arr[9];
   $actual_vs_ideal_usage[$product] = $arr[10];
}
else{ 
   echo "No matches found";
}
}

echo "<table cellspacing='0' cellpadding='15px' border-spacing='0' style='margin:0;padding:0;'><tr><td>";
echo "<table>";
echo "<th>Ideal Usage</th>";
foreach ($ideal_usage as $key => $value) {
  echo "<tr><td> $key </td><td> $value </td></tr>";
}
echo "</table>";
echo '</td><td>';
echo "<table>";
echo "<th>Actual Usage</th>";
foreach ($actual_usage as  $key => $value) {
  echo "<tr><td> $key </td><td> $value </td></tr>";
}
echo "</table>";
echo '</td></tr><tr><td>';
echo '<table>';
echo "<th>Actual Vs Ideal Usage</th>";
foreach ($actual_vs_ideal_usage as  $key => $value) {
  echo "<tr><td> $key </td><td> $value </td></tr>";
}
echo "</table>";
echo '</td><td>';
echo "<table>";
echo "<th>Current Inventory</th>";
foreach ($current_inventory as  $key => $value) {
  echo "<tr><td> $key </td><td> $value </td></tr>";
}
echo "</table>";
echo "</td></tr></table>"
?>
</head>
</html>
