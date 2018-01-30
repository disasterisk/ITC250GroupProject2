<?php
//saladTruck.php
define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); //figure out the name of the current page


$greens[] = new Item(1,"Iceberg Lettuce",1.00);
$greens[] = new Item(2,"Romaine Lettuce",2.00);
$greens[] = new Item(3,"Spinach",3.00);
$greens[] = new Item(4,"Arugula",4.00);

$veggies[] = new Item(5,"Tomato",5.00);
$veggies[] = new Item(6,"Cucumber",6.00);
$veggies[] = new Item(7,"Bell Pepper",7.00);
$veggies[] = new Item(8,"Mushroom",8.00);

$meat[] = new Item(9,"Chicken",9.00);
$meat[] = new Item(10,"Salmon",3.50);
$meat[] = new Item(11,"Steak",4.50);

$extras[] = new Item(12,"Cheddar Cheese",5.50);
$extras[] = new Item(13,"Feta Cheese",6.50);
$extras[] = new Item(14,"Croutons",7.50);

class Item
{
    public $ID = 0;
    public $Name = '';
    public $Price = 0;
    
    
    public function __construct($ID,$Name,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Price = $Price;
        
    }#end Item constructor
        
}#end Item class

if (!isset($_POST['submit'])) //if nothing is ordered, print the menu
        {  
            echo '
            <form action = "' . $_SERVER['PHP_SELF'] . '"  method = "POST"> ';
    
            foreach($greens as $tempItem)
            {               
                createMenu($tempItem);
            }
            
            echo'<br>';
    
            foreach($veggies as $tempItem) 
            {
                createMenu($tempItem); 
            }
            
            echo'<br>';
    
            foreach($meat as $tempItem) 
            {
               createMenu($tempItem); 
            }
            
            echo'<br>';
    
            foreach($extras as $tempItem) 
            {                
                createMenu($tempItem); 
            }
            
            echo'<br>';
    
               
		echo '
	    <br><input type = "submit" name = "submit" value ="Submit Order">
    	</form>   ';
        }//if statement to generate menu + order form
		else 
        {               
            if(isset($_POST['submit'])){

                if(!empty($_POST['menuItems'])) {

                    foreach($_POST['menuItems'] as $value){
                    //pull values of the checkboxes
                    //echo "value : ".$value.'<br/>';
                        $sum += $value;//Add up the total
                    }//end of foreach
                }//end of if
            }//end of if
        $subtotal = $sum;
        $tax = $sum*.096;
        $total = $subtotal + $tax;
            echo 'Subtotal: $' . number_format($sum, 2) . '';
            echo '<br>';
            echo 'Tax: $' . number_format($tax, 2) . '';
            echo '<br>';
            echo 'Total: $' . number_format($total, 2) . '';
            
            echo'<br>';
            echo '<a href='. $_SERVER['PHP_SELF'] .'> Place Another Order! </a>';      
        }//items ordered, display totals

           
function createMenu($tempItem){
    echo'
    <input type="checkbox" name="menuItems[]" value="' . $tempItem->Price . '">' . $tempItem->Name . '
    ';
}


