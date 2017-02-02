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

  public function getProductName() {
    return $this->product_name;
  }

  public function setProductName($name) {
    $this->product_name = $name;
  }

  public function getSize() {
    return $this->size;
  }

  public function setSize($volume) {
    $this->size = $volume;
  }

  public function getQuantity() {
    return $this->quantity;
  }

  public function setQuantity($number) {
    $this->quantity = $number;
  }

  public function getUnitCost() {
    return $this->unit_cost;
  }

  public function setUnitCost($cost) {
    $this->unit_cost = $cost;
  }

  public function getCurrentInventory() {
    return $this->current_inventory;
  }

  public function setCurrentInventory($current) {
    $this->current_inventory = $current;
  }

  public function getActualUsage() {
    return $this->actual_usage;
  }

  public function setActualUsage($actual) {
    $this->actual_usage = $actual;
  }

  public function getIdealUsage() {
    return $this->ideal_usage;
  }

  public function setIdealUsage($ideal) {
    $this->ideal_usage = $ideal;
  }

  public function getActualVsIdeal() {
    return $this->actual_pct_vs_ideal;
  }

  public function setActualVsIdeal($percent) {
    $this->actual_pct_vs_ideal = $percent;
  }



}
?>
