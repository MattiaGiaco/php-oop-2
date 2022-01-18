<?php

class Product {
  private $title;
  private $description;
  protected $price;

  function __construct($_title, $_price) {
     $this->title = $_title;
     $this->price = $_price;
  }

  public function setTitle($_title) {
    $this->title = $_title;
  }
 public function setDescription($_description) {
    $this->description = $_description;
  }
 public function setPrice($_price) {
    $this->price = $_price;
  }


 public function getTitle() {
    return $this->title;
  }
 public function getDescription() {
    return $this->description;
  }
 public function getPrice() {
    return $this->price;
  }

}  