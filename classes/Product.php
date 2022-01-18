<?php

class Product {
  private $title;
  private $description;
  protected $price;

  function __construct($_title, $_price) {
     $this->title = $_title;
     $this->price = $_price;
  }
  
}  