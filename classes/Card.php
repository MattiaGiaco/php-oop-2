<?php

class Card {
  private $cardNumber;
  private $cvv;
  private $name;
  private $expired_date_m;
  private $expired_date_y;

  function __construct($_cardNumber, $_cvv,$_name, $_expired_date_m, $_expired_date_y) 
  {
    $this->cardNumber = $this->checkValidNumber($_cardNumber);
    $this->cvv = $this->checkCvv($_cvv);
    $this->name = $_name;
    $this->checkValidExiredDate($_expired_date_y,$_expired_date_m);
    $this->expired_date_m = $_expired_date_m;
    $this->expired_date_y = $_expired_date_y;
  }



  public function setCardNumber($_cardNumber) {
    $this->cardNumber = $_cardNumber;
  }
  public function setCvv($_cvv) {
    $this->cvv = $_cvv;
  }
  public function setName($_name){
    $this->name = $_name;
  }
  public function setExipredMounth($_m){
    $this->checkValidExiredDate($this->expired_date_y,$_m);
    $this->expired_date_m = $_m;
  }
  public function setExpiredYear($_y){
    $this->checkValidExiredDate($_y,$this->expired_date_m);
    $this->expired_date_y = $_y;
  }



  public function getCardNumber() {
    return $this->cardNumber;
  }
  public function getCvv() {
    return $this->cvv;
  }
  public function getName(){
    return $this->name;
  }
  public function getExpiredMounth(){
    return $this->expired_date_m;
  }
  public function getExpiredYear(){
    return $this->expired_date_y;
  }

  private function checkValidNumber($cardNumber){
    if(!is_int($cardNumber) || strlen($cardNumber) != 12){
      throw new \Exception('Numero carta di credito non valido');
    }
    return  $cardNumber;
  }

  private function checkCvv($cvv){
    if(!is_int($cvv) || strlen($cvv) != 3){
      throw new \Exception('Numero CVV non valido');
    }
    return  $cvv;
  }

  private function checkValidExiredDate($y,$m){
    $today = date("Y-n-j");

    if(!is_int($y) || !is_int($m)){
      throw new \Exception('Mese e anno devono essere dei numeri');
    }
    if($m > 12 || $m < 1){
      throw new \Exception('Mese non valido');
    }
   
    $expired_date = $this->generateExpiredDate($y, $m);
    if($today >= $expired_date){
      throw new \Exception('Carta di credito scaduta');
    }
  }

  private function generateExpiredDate($y, $m){
    $m_exp = $m + 1;
    $y_exp = $y;

    if($m_exp > 12){
      $m_exp = 1;
      $y_exp = $y + 1;
    }

    if(!checkdate($m_exp,1,$y_exp)){
      throw new \Exception('La data non è valida');
    }

    return date("$y_exp-$m_exp-1");
  }
}