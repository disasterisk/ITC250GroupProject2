<?php
class Salad
{
  private $ingredients = array();
  private $price = 0;
  private $amount = 0;
  function __construct($price,$amount)
  {
    $this->price = $price;
    $this->amount = $amount;
  }
  public function getNgrdts() {
    return $this->ingredients;
  }
  public function getPrice() {
    return $this->price;
  }
  public function getAmount() {
    return $this->amount;
  }
  public function addNgrdt($n) {
    $this->ingredients[] = $n;
  }
}
