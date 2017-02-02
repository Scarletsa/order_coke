<?php

function theft_check() {
  foreach ($actual_vs_ideal_usage as  $key => $value) {
    if (()$ideal_usage[$key]*.1) > $value) {
      echo "We seem to be having a problem with $key";
    }
  }
}

function order_estimate() {
  $estimate = ['2-Liter Coke	Colas', '2-Liter Diet Coke	Colas', '2-Liter Cherry Coke	Colas', '2-Liter Coke Zero	Colas', '2-Liter Sprite	Colas', '2-Liter Root Beer	Colas',
              '2-Liter Orange	Colas', '2-Liter Mello Yello  	Colas', '2 liter Minute Maid Lemonade	Colas', '20oz Coke Bottle	Colas', '20oz Diet Coke Bottle	Colas',
              '20oz Cherry Coke Bottle	Colas', '20oz Coke Zero	Colas', '20oz Root Beer Bottle	Colas', '20oz Sprite Bottle	Colas', '20oz Orange Bottle	Colas',
              '20 oz Mello Yello Bottle	Colas', '20 oz bottle Minute Maid Lemonade 	Colas', '20oz Water Bottle	Colas'];

  foreach ($ideal_usage as $key => $value) {
    $estimate[$key] = ($ideal_usage[$key]*1.10)-$current_inventory[$key]
  }
}

?>
