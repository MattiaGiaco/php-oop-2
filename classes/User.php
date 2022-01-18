<?php

class User {
  private $firstname;
  private $lastname;
  private $email;
  protected $discountPrime = 0;
  private $purchasedProduct;

  function __construct($_firstname, $_lastname) {
    $this->firstname = $_firstname;
    $this->lastname = $_lastname;
  }

  public function setFirstname($_firstname) {
    $this->firstname = $_firstname;
  }
  public function setLastname($_lastname) {
    $this->lastname = $_lastname;
  }
  public function setEmail($_email) {
    $this->email = $_email;
  }
  public function setDiscountPrime($_discountPrime) {
    $this->discountPrime = $_discountPrime;
  }
  public function setPurchased($_product) {
    $this->purchasedProduct = $_product;
  }


  public function getFirstname() {
    return $this->firstname;
  }
  public function getLastname() {
    return $this->lastname;
  }
  public function getEmail() {
    return $this->email;
  }
  public function getDiscountPrime() {
    return $this->discountPrime;
  }

  public function getDiscountedPrice() {
    $originalPrice = $this->purchasedProduct->getPrice();
    $discountedPrice = $originalPrice - ($originalPrice * $this->discountPrime) / 100;
    return number_format($discountedPrice, 2, ',', '');
  }

}