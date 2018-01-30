<?php
//saladTruck.php
define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); //figure out the name of the current page
$greens[] = new Item(1,"Iceberg Lettuce",0);
$greens[] = new Item(2,"Romaine Lettuce",0);
$greens[] = new Item(3,"Spinach",0);
$greens[] = new Item(4,"Arugula",0);
$veggies[] = new Item(5,"Tomato",0);
$veggies[] = new Item(6,"Cucumber",0);
$veggies[] = new Item(7,"Bell Pepper",0);
$veggies[] = new Item(8,"Mushroom",0);
$meat[] = new Item(9,"Chicken",1.5);
$meat[] = new Item(10,"Salmon",1.5);
$meat[] = new Item(11,"Steak",2);
$meat[] = new Item(15,"Shrimp",1.5);
$extras[] = new Item(12,"Cheddar Cheese",.25);
$extras[] = new Item(13,"Feta Cheese",.5);
$extras[] = new Item(14,"Croutons",0);
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
	    <br>
      <select name="amount">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>&nbsp;
      <input type = "submit" name = "submit" value ="Submit Order">
    	</form>   ';
        }//if statement to generate menu + order form
		else
        {
            if(isset($_POST['submit'])){
                if(!empty($_POST['menuItems'])) {
                    $sum = 5.99;
                    foreach($_POST['menuItems'] as $value){
                    //pull values of the checkboxes
                    //echo "value : ".$value.'<br/>';
                      $sum += $value;//Add up the total
                    }//end of foreach
                }//end of if
            }//end of if
            $sum = $sum * intval($_POST['amount']);
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
/*
echo '<form action="P2Form.php" method="post">
  <h1>Salads</h1>
  <h2>Salad Greens</h2>
  <label>
    <input type="checkbox" name="leaves" value="iceberg">&nbsp;
    Iceberg Lettuce
  </label>
  <label>
    <input type="checkbox" name="leaves" value="romaine">&nbsp;
    Romaine Lettuce
  </label>
  <label>
    <input type="checkbox" name="leaves" value="spinach">&nbsp;
    Spinach
  </label>
  <label>
    <input type="checkbox" name="leaves" value="arugula">&nbsp;
    Arugula
  </label>
  <h2>Veggies</h2>
    <label>
      <input type="checkbox" name="veggie" value="tomato">&nbsp;
      Tomato
    </label>
    <label>
      <input type="checkbox" name="veggie" value="cucumber">&nbsp;
      Cucumber
    </label>
    <label>
      <input type="checkbox" name="veggie" value="bellpepper">&nbsp;
      Bell Pepper
    </label>
    <label>
      <input type="checkbox" name="veggie" value="mushroom">&nbsp;
      Mushroom
    </label>
  <h2>Meat</h2>
  <label>
    <input type="radio" name="meat" value="chicken">&nbsp;
    Chicken&nbsp;&nbsp;<small><em>$1</em></small>
  </label>
  <label>
    <input type="radio" name="meat" value="salmon">&nbsp;
    Salmon&nbsp;&nbsp;<small><em>$1</em></small>
  </label>
  <label>
    <input type="radio" name="meat" value="shrimp">&nbsp;
  </label>
  <label>
    <input type="radio" name="meat" value="steak">&nbsp;
    Steak&nbsp;&nbsp;<small><em>$2</em></small>
  </label>
  <h2>Extras</h2>
  <label>
    <input type="checkbox" name="extra" value="cheddar">&nbsp;
    Cheddar Cheese
  </label>
  <label>
    <input type="checkbox" name="extra" value="feta">&nbsp;
    Feta Cheese
  </label>
  <label>
    <input type="checkbox" name="extra" value="croutons">&nbsp;
    Croutons
  </label>
  <br><br>
  <select name="amount">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
  </select>&nbsp;
  <input type="submit" name="submitSalad">
</form>
';
*/
