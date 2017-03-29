<?php
  include 'dbattributes.php';

  function theft_check() {

  }

  function order_estimate($week) {

    /* = array("E:/College/CSCI/CSCI2006/order_coke/databases/orders",
    "E:/College/CSCI/CSCI2006/order_coke/databases/stores",
    "E:/College/CSCI/CSCI2006/order_coke/databases/users");*/

    $dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $total = [];
      $quantity = 0;
      $cases = 0;

      echo "<table><tr>";
      foreach ($week[0] as $key => $product) {
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.2;
        $total[$key] = $quantity;
      }
      echo "<tr></tr>";
      foreach ($week[1] as $key => $product) {
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.35;
        $total[$key] += $quantity;
      }
      echo "<tr></tr>";
      foreach ($week[2] as $key => $product) {
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.45;
        $total[$key] += $quantity;
        $buffer = $usage*0.35;
        $count = $product->quantity;
        $ideal = $product->ideal_usage;
        $actual = $product->actual_usage;
        $current = $product->current_inventory;
        $total[$key] = (($total[$key]*(11/7)*1.3)-$current+$buffer)/$count;
        //$entityManager->persist($product);
        //$entityManager->flush();
      }

      echo "<tr><td colspan = 19>Order</td></tr><tr>";
      foreach ($total as $item => $number) {
        if ($number < 0) {
          $number = 0;
        } else {
          $number = ceil($number);
          $cases += $number;
        }
        echo "<td>$number<br>$item<td>";
      }

      echo "</tr></table>";

      echo "<br>Total cases: $cases";

      // average = (last week((ideal or actual, whichever is greater))*.5 + 2 weeks ago((ideal or actual, whichever is greater))*.35 + 3 weeks ago((ideal or actual, whichever is greater))*.15);
      // bottle estimate = average*(9/7)*1.15 - current; estimate for 7 days; calculating for 9 days; adding 15%. Will be the number of bottles needed to order;
      // if bottle estimate%quantity > .25, round down; else, round up.
        // case estimate = bottle estimate/quantity; (Rounded up or down by rule above.)
    }

    function compare($actual, $ideal) {
      if (($actual > $ideal) || ($actual = $ideal)) {
        return $actual;
      } else {
        return $ideal;
      }
    }

    /*function database($week) {

      $dbhost = 'localhost';
      $dbport = '3306';
      $dbuser = 'Admin';
      $dbpass = 'R00t';
      $conn = new PDO("mysql:host=$dbhost;port=$dbport;dbname=products;charset=utf8mb4", $dbuser, $dbpass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $table = "store1901$count";
      $sql = "CREATE TABLE $table(serialized VARCHAR(250) NOT NULL);";
      $conn->exec($sql);

      if(! $conn ) {
        die('Could not connect: ' . mysql_error());
      }

      echo '<br><br>Connected successfully';

      foreach ($week[2] as $product) {
        $stmt = $conn->prepare("INSERT INTO $table(serialized) VALUES (:myvar)");
        $stmt->execute(array(':myvar' => serialize($product),));
        $count++;
      }


    $conn = null;
  }
  */

?>
