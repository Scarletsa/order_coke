<?php
class Order {
  public $c132529;
  public $c132530;
  public $c132531;
  public $c132532;
  public $c132546;
  public $c132551;
  public $c132543;
  public $c132541;
  public $c132540;
  public $c102605;
  public $c102603;
  public $c121571;
  public $c102604;
  public $c102656;
  public $c114532;
  public $c114230;
  public $c102659;
  public $c101891;
  public $c112259;
  public $storeNumber;
  public $user;
  private $orderDate;

  public function __construct($cherry2L, $coke2L, $zero2L, $diet2L, $mello2L, $mm2L, $orange2L, $rootBeer2L,
  $sprite2L, $cherry20oz, $coke20oz, $zero20oz, $diet20oz, $mello20oz, $mm20oz, $orange20oz, $rootBeer20oz, $sprite20oz, $water20oz, $storeNumber, $user) {
  $this->c132529 = $cherry2L;
  $this->c132530 = $coke2L;
  $this->c132531 = $zero2L;
  $this->c132532 = $diet2L;
  $this->c132546 = $mello2L;
  $this->c132551 = $mm2L;
  $this->c132543 = $orange2L;
  $this->c132541 = $rootBeer2L;
  $this->c132540 = $sprite2L;
  $this->c102605 = $cherry20oz;
  $this->c102603 = $coke20oz;
  $this->c121571 = $zero20oz;
  $this->c102604 = $diet20oz;
  $this->c102656 = $mello20oz;
  $this->c114532 = $mm20oz;
  $this->c114230 = $orange20oz;
  $this->c102659 = $rootBeer20oz;
  $this->c101891 = $sprite20oz;
  $this->c112259 = $water20oz;
  $this->storeNumber = $storeNumber;
  $this->user = $user;
  $this->orderDate = date('l jS \of F Y h:i:s A');
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
    return "Cherry Coke 2-Liter:" . $this->c132529 . "<br>Coke 2-Liter:" . $this->c132530 . "<br>Coke Zero 2-Liter:" . $this->c132531 . "<br>Diet Coke 2-Liter:" . $this->c132532 .
    "<br>Mello Yello 2-Liter:" . $this->c132546 . "<br>Minute Maid Lemonade 2-Liter:" . $this->c132551 . "<br>Orange 2-Liter:" . $this->c132543 . "<br>Root Beer 2-Liter:" . $this->c132541 . "<br>Sprite 2-Liter:" . $this->c132540 .
    "<br>Cherry Coke 20oz:" . $this->c102605 . "<br>Coke 20oz:" . $this->c102603 . "<br>Coke Zero 20oz:" . $this->c121571 . "<br>Diet Coke 20oz:" . $this->c102604 . "<br>Mello Yello 20oz:" . $this->c102656 .
    "<br>Minute Maid Lemonade 20oz:" . $this->c114532 . "<br>Orange 20oz:" . $this->c114230 . "<br>Root Beer 20oz:" . $this->c102659 . "<br>Sprite 20oz:" . $this->c101891 . "<br>Water 20oz:" . $this->c112259 . "'";
  }

  public function dbvalues() {
    return "'" . $this->storeNumber . "','". $this->user . "','". $this->orderDate . "','" . $this->c132529 . "','" . $this->c132530 . "','" . $this->c132531 . "','" . $this->c132532 .
    "','" . $this->c132546 . "','" . $this->c132551 . "','" . $this->c132543 . "','" . $this->c132541 . "','" . $this->c132540 .
    "','" . $this->c102605 . "','" . $this->c102603 . "','" . $this->c121571 . "','" . $this->c102604 . "','" . $this->c102656 .
    "','" . $this->c114532 . "','" . $this->c114230 . "','" . $this->c102659 . "','" . $this->c101891 . "','" . $this->c112259 . "'";
  }

  public $order_date;

  public $store;
  }

?>
