<?php
//namespace entity;

//use Doctrine\ORM\Mapping as ORM;

// Objects to be used by every user.
class Product {
  private $product_name; // Coke Classic
  private $size; // 2-liter
  private $quantity; // Number per case 2-liter: 8; 20oz: 24;
  private $unit_cost; // The product's price per bottle.
  private $current_inventory; // What the store currently has on hand.
  private $actual_usage; // What the store actually used in the last week.
  private $ideal_usage; // WHat the store should have sold.
  private $actual_pct_vs_ideal; // How much we were over or underused based on percent.

  public function __construct($name, $volume, $number, $cost, $current, $actual, $ideal, $percent) {
    $this->product_name = $name;
    $this->size = $volume;
    $this->quantity = $number;
    $this->unit_cost = $cost;
    $this->current_inventory = $current;
    $this->actual_usage = $actual;
    $this->ideal_usage = $ideal;
    $this->actual_pct_vs_ideal = $percent;
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }

  public function __toString() {
    return $this->product_name . "<br>" . $this->size . "<br>" . $this->quantity ."<br>" . $this->unit_cost . "<br>" . $this->current_inventory .
    "<br>" . $this->actual_usage . "<br>" . $this->ideal_usage . "<br>" . $this->actua_pct_vs_ideal . "<br>";
  }


}
?>
