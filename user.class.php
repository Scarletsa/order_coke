<?php
// Created when the signup_form is submitted.
class User {
  public $username;
  public $firstName;
  public $lastName;
  public $email;
  private $password;
  public $storeNumber;
  public $outletNumber;
  private $creationDate;

public function __construct($name, $fName, $lName, $email, $password, $storeNumber, $outletNumber) {
  $this->username = $name;
  $this->firstName = $fName;
  $this->lastName = $lName;
  $this->email = $email;
  $this->password = $password;
  $this->storeNumber = $storeNumber;
  $this->$outletNumber = $outletNumber;
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
  "<br>" . $this->password . "<br>" . $this->storeNumber . "<br>" . $this->outletNumber . "<br>" . $this->creationDate;
}

public function dbvalues() {
  return "'" . $this->username . "','" . $this->firstName ."','" . $this->lastName . "','" . $this->email .
  "','" . $this->password . "','" . $this->storeNumber . "','" . $this->outletNumber . "','" . $this->creationDate . "'";
}
}
?>
