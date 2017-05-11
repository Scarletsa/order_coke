<?php
  function order_estimate($week) {
    include 'dataids.php';
    $dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $total = [];
      $quantity = 0;
      $cases = 0;

      foreach ($week[2] as $key => $product) {
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.2;
        $total[$key] = $quantity;
      }
      foreach ($week[1] as $key => $product) {
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.35;
        $total[$key] += $quantity;
      }
      foreach ($week[0] as $key => $product) {
        $usage = compare($product->actual_usage, $product->ideal_usage);
        $quantity = $usage*0.45;
        $total[$key] += $quantity;
        $count = $product->quantity;
        $ideal = $product->ideal_usage;
        $actual = $product->actual_usage;
        $current = $product->current_inventory;
        $total[$key] = (($total[$key]*(13/7)*1.45)-$current)/$count;
      }

      foreach ($total as $item => $number) {
        if ($number <= 0) {
          $number = 0;
        } else {
          $intpart = floor($number);
          $remainder = $number - $intpart;
          if ($remainder < .2) {
            $number = floor($number);
          } else {
            $number = ceil($number);
          }
          //$number = number_format($number, 2, '.', '');
        }
        $total[$item] = $number;
        $cases += $number;
      }
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
