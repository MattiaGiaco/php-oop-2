<?php

class User {
  private $firstname;
  private $lastname;
  private $email;

  function __construct($_firstname, $_lastname) {
    $this->firstname = $_firstname;
    $this->lastname = $_lastname;
  }
}