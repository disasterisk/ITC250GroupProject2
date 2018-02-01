<?php  

include "saladTruckItems.php";

class Salad {
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Toppings = array();
    public $TotalPrice = 0; // includes all toppings
    
    public function __construct($id, $name, $description, $price) {
        $this->ID = $id;
        $this->Name = $name;
        $this->Description = $description;
        $this->Price = $price;
        $this->TotalPrice = $price;
    }
    
    public function addTopping($topping) {
        $this->Toppings[] = $topping;        
    }

    public function totalPrice() {
        foreach ($this->Toppings as $index => $topping) {
            $this->TotalPrice += $topping->Price;
        }
        return $this->TotalPrice;
    }
}#end Salad class

class Topping {
    public $Name = "";
    public $Price = 0;

    // if the topping price is not 1.99, then set it.
    public function __construct($name, $price = 1.99) {
        $this->Name = $name;
        $this->Price = $price;       
    }
}

class Order {
    public $Salad = null;
    public $Quantity = 0;

    public function __construct($salad, $quantity = 1){
        $this->Salad = $salad;
        $this->Quantity = $quantity;
    }

    public function printSummary() {
        print_r($this->Salad->Name);

        // if ($Quantity > 0) {
            // print(" x");
            // print_r($this->Quantity);    
        // }
        print(" Price: $");
        print($this->Salad->TotalPrice);
    }
}



