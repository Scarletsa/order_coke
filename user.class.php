<?php
// Created when the signup_form is submitted.
class User {
  public $username;
  public $firstName;
  public $lastName;
  public $email;
  private $password;
  public $storeNumber;
  public $orderDay;
  public $deliveryDay;
  private $creationDate;

public function __construct($name, $fName, $lName, $email, $password, $number, $orderDay, $deliveryDay) {
  $this->username = $name;
  $this->firstName = $fName;
  $this->lastName = $lName;
  $this->email = $email;
  $this->password = $password;
  $this->storeNumber = $number;
  $this->orderDay = $orderDay;
  $this->deliveryDay = $deliveryDay;
  $this->creationDate = date('l jS \of F Y h:i:s A');
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
  return $this->username . "<br>" . $this->firstName ."<br>" . $this->lastName . "<br>" . $this->email .
  "<br>" . $this->password . "<br>" . $this->storeNumber . "<br>" . $this->orderDay ."<br>" . $this->deliveryDay . "<br>" . $this->creationDate;
}

public function dbvalues() {
  return "'" . $this->username . "','" . $this->firstName ."','" . $this->lastName . "','" . $this->email .
  "','" . $this->password . "','" . $this->storeNumber . "','" . $this->orderDay ."','" . $this->deliveryDay . "','" . $this->creationDate . "'";
}
}
?>
