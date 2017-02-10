<?php
  function theft_check() {

  }

  function order_estimate($week) {
      $total = [];
      $quantity = 0;

      foreach ($week[2] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.5;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.5;
        } else {
          $quantity = $product->getActualUsage()*.5;
        }
          $total[$key] = $quantity;
        }


      foreach ($week[1] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.35;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.35;
        } else {
          $quantity = $product->getActualUsage()*.35;
        }
          $total[$key] += $quantity;
        }


      foreach ($week[0] as $key => $product) {

          if ($product->getActualUsage() > $product->getIdealUsage()){
          $quantity = $product->getActualUsage()*.15;
        } elseif ($product->getActualUsage() < $product->getIdealUsage()){
          $quantity = $product->getIdealUsage()*.15;
        } else {
          $quantity = $product->getActualUsage()*.15;
        }
          $total[$key] += $quantity;
          $count = $product->getQuantity();
          $total[$key] = (($total[$key]*(9/7)*1.15)-$product->getCurrentInventory())/$count;
        }


      foreach ($total as $item => $number) {
        if ($number < 0) {
          $number = 0;
        } else {
          $number = ceil($number);
        }
        echo "Order $number $item<br>";
      }

      // average = (last week((ideal or actual, whichever is greater))*.5 + 2 weeks ago((ideal or actual, whichever is greater))*.35 + 3 weeks ago((ideal or actual, whichever is greater))*.15);
      // bottle estimate = average*(9/7)*1.15 - current; estimate for 7 days; calculating for 9 days; adding 15%. Will be the number of bottles needed to order;
      // if bottle estimate%quantity > .25, round down; else, round up.
        // case estimate = bottle estimate/quantity; (Rounded up or down by rule above.)
    }



?>
