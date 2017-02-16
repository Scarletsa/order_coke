<?php
  function theft_check() {

  }

  function order_estimate($week) {
      $total = [];
      $quantity = 0;
      $cases = 0;

      //echo "Last weeks numbers<br>";
      foreach ($week[2] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.45;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.45;
        } else {
          $quantity = $product->getActualUsage()*.45;
        }
          $total[$key] = $quantity;
          $ideal = $product->getIdealUsage();
          $actual = $product->getActualUsage();

          //echo "$key ideal $ideal Actual $actual <br>";
        }


      //echo "<br>Numbers two weeks ago<br>";
      foreach ($week[1] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.35;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.35;
        } else {
          $quantity = $product->getActualUsage()*.35;
        }
          $total[$key] += $quantity;
          $ideal = $product->getIdealUsage();
          $actual = $product->getActualUsage();
          //echo "$key ideal $ideal Actual $actual <br>";
        }


      //echo "<br>Numbers three weeks ago<br>";
      foreach ($week[0] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.2;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.2;
        } else {
          $quantity = $product->getActualUsage()*.2;
        }
          $total[$key] += $quantity;
          $count = $product->getQuantity();
          $ideal = $product->getIdealUsage();
          $actual = $product->getActualUsage();
          //echo "$key ideal $ideal Actual $actual <br>";

          $total[$key] = (($total[$key]*(10/7)*1.2)-$product->getCurrentInventory())/$count;
        }

      echo "<br>Order<br>";
      foreach ($total as $item => $number) {
        if ($number < 0) {
          $number = 0;
        } else {
          $number = ceil($number);
          $cases += $number;
        }
        echo "$number $item<br>";
      }

      echo "<br>Total cases: $cases";

      // average = (last week((ideal or actual, whichever is greater))*.5 + 2 weeks ago((ideal or actual, whichever is greater))*.35 + 3 weeks ago((ideal or actual, whichever is greater))*.15);
      // bottle estimate = average*(9/7)*1.15 - current; estimate for 7 days; calculating for 9 days; adding 15%. Will be the number of bottles needed to order;
      // if bottle estimate%quantity > .25, round down; else, round up.
        // case estimate = bottle estimate/quantity; (Rounded up or down by rule above.)
    }



?>
