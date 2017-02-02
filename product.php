<?php

// Objects to be used by every user.
class Product {
  public $product_name; // Coke Classic
  public $size; // 2-liter
  public $quantity; // Number per case 2-liter: 8; 20oz: 24;
  public $unit_cost; // The product's price per bottle.
  public $current_inventory; // What the store currently has on hand.
  public $actual_usage; // What the store actually used in the last week.
  public $ideal_usage; // WHat the store should have sold.
  public $actual_pct_vs_ideal; // How much we were over or underused based on percent.

  function __construct($name, $size, $quantity, $cost, $current, $actual, $ideal, $actual_pct_vs_ideal) {
  $this.setProductName($name);
}

  function getProductName() {
    return $this->product_name;
  }

  function setProductName($name) {
    $this->product_name = $name;
  }

  function getSize() {
    return $this->size;
  }

  function setSize($volume) {
    $this->size = $volume;
  }

  function getQuantity() {
    return $this->quantity;
  }

  function setQuantity($number) {
    $this->quantity = $number;
  }

  function getUnitCost() {
    return $this->unit_cost;
  }

  function setUnitCost($cost) {
    $this->unit_cost = $cost;
  }

  function getCurrentInventory() {
    return $this->current_inventory;
  }

  function setCurrentInventory($current) {
    $this->current_inventory = $current;
  }

  function getActualUsage() {
    return $this->actual_usage;
  }

  function setActualUsage($actual) {
    $this->actual_usage = $actual;
  }

  function getIdealUsage() {
    return $this->ideal_usage;
  }

  function setIdealUsage($ideal) {
    $this->ideal_usage = $ideal;
  }

  function getActualVsIdeal() {
    return $this->actual_pct_vs_ideal;
  }

  function setActualVsIdeal($percent) {
    $this->actual_pct_vs_ideal = $percent;
  }



}
?>
