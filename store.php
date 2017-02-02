<?php

class Store {
  public $store_number;

  public $outlet_number;

  public $products = ['2-Liter Coke	Colas', '2-Liter Diet Coke	Colas', '2-Liter Cherry Coke	Colas', '2-Liter Coke Zero	Colas', '2-Liter Sprite	Colas', '2-Liter Root Beer	Colas',
              '2-Liter Orange	Colas', '2-Liter Mello Yello  	Colas', '2 liter Minute Maid Lemonade	Colas', '20oz Coke Bottle	Colas', '20oz Diet Coke Bottle	Colas',
              '20oz Cherry Coke Bottle	Colas', '20oz Coke Zero	Colas', '20oz Root Beer Bottle	Colas', '20oz Sprite Bottle	Colas', '20oz Orange Bottle	Colas',
              '20 oz Mello Yello Bottle	Colas', '20 oz bottle Minute Maid Lemonade 	Colas', '20oz Water Bottle	Colas'];

  public $actual_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
              '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
              '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
              '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

  public $ideal_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
              '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
              '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
              '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

  public $actual_vs_ideal_usage = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
              '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
              '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
              '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];

  public $current_inventory = ['2-Liter Coke	Colas' => 0, '2-Liter Diet Coke	Colas' => 0, '2-Liter Cherry Coke	Colas' => 0, '2-Liter Coke Zero	Colas' => 0, '2-Liter Sprite	Colas' => 0, '2-Liter Root Beer	Colas' => 0,
              '2-Liter Orange	Colas' => 0, '2-Liter Mello Yello  	Colas' => 0, '2 liter Minute Maid Lemonade	Colas' => 0, '20oz Coke Bottle	Colas' => 0, '20oz Diet Coke Bottle	Colas' => 0,
              '20oz Cherry Coke Bottle	Colas' => 0, '20oz Coke Zero	Colas' => 0, '20oz Root Beer Bottle	Colas' => 0, '20oz Sprite Bottle	Colas' => 0, '20oz Orange Bottle	Colas' => 0,
              '20 oz Mello Yello Bottle	Colas' => 0, '20 oz bottle Minute Maid Lemonade 	Colas' => 0, '20oz Water Bottle	Colas' => 0];
}

?>
