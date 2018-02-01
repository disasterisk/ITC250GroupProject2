<?php
class Ingredient
{
    public $ID = 0;
    public $Name = '';
    public $Price = 0;
    public $Description = '';
    public function __construct($ID,$Name,$Price,$Description)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Price = $Price;
        $this->Description = $Description;
    }#end Ingredient constructor
}#end Ingredient class
