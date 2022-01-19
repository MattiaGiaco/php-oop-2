<?php

trait Address {
  public $street;
  public $postCode;
  public $town; 
  public $country;


  public function getAddress(){
    return "$this->street, $this->town, $this->country";
  }
}