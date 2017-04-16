<?php
  function order_estimate($week) {
    include 'dataids-1.php';
    $dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $total = [];
      $quantity = 0;
      $cases = 0;

      echo "<table><tr>";
      foreach ($week[2] as $key => $product) {
        //$key = array_search($key, $dataids);
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.2;
        $total[$key] = $quantity;
      }
      echo "<tr></tr>";
      foreach ($week[1] as $key => $product) {
        //$key = array_search($key, $dataids);
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.35;
        $total[$key] += $quantity;
      }
      echo "<tr></tr>";
      foreach ($week[0] as $key => $product) {
        //$key = array_search($key, $dataids);
        echo "<td>$product<td>";
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.45;
        $total[$key] += $quantity;
        $buffer = $usage*0.4;
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
          $intpart = floor($number);
          $remainder = $number - $intpart;
          if ($remainder < .3) {
            $number = floor($number);
          } else {
            $number = ceil($number);
          }
          //$number = number_format($number, 2, '.', '');
          $total[$item] = $number;
          $cases += $number;
        }
        echo "<td>$number<br>$item<td>";
      }

      echo "</tr></table>";

      echo "<br>Total cases: $cases";

      return $total;
    }

    function compare($actual, $ideal) {
      if (($actual > $ideal) || ($actual = $ideal)) {
        return $actual;
      } else {
        return $ideal;
      }
    }
?>
