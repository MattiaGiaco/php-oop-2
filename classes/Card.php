<?php

class Card {
  private $cardNumber;
  private $cvv;

  function __construct($_cardNumber, $_cvv) 
  {
    $this->cardNumber = $_cardNumber;
    $this->cvv = $_cvv;
  }

  public function setCardNumber($_cardNumber) {
    $this->cardNumber = $_cardNumber;
  }
  public function setCvv($_cvv) {
    $this->cvv = $_cvv;
  }

  public function getCardNumber() {
    return $this->cardNumber;
  }
  public function getCvv() {
    return $this->cvv;
  }
}