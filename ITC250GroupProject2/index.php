<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans" rel="stylesheet">
<head>
	<meta charset="UTF-8">
	<title>P2: Salad Truck</title>
</head>
<body>
	<div class="main">
		<img src="img/saladone.png" alt="saladone" class="saladone">
		<img src="img/saladtwo.png" alt="saladtwo" class="saladtwo">
		<img src="img/taco.png" alt="taco" class="taco">

<?php 
include "saladTruckClass.php";


function displayForm($salads) {

	echo '
		<form method="post">
		<h3>Please choose a salad you would like to order:</h3>
		<br/>
		<input class="text" type="radio" name="salads" value="0"/> Caesar Salad | $5.99
		<br/>
		<p>Our Caesar salad is awesome!</p>
		<br/>
		<input class="text" type="radio" name="salads" value="1"/> Cobb Salad | $6.99
		<br/>
		<p>Our Cobb salad is very yummy!</p>
		<br/>
		<input class="text" type="radio" name="salads" value="2"/> Taco Salad | $7.99
		<br/>
		<p>Our Taco Salad is very popular!</p>
		<br/>
		<h3>Topping options:</h3>
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[0]" /> Romaine Lettuce | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[1]" /> Grill Chicken Breast | $2.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[2]" /> Crisp Bacon | $2.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[3]"  /> Egg | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[4]"  /> Parmesan | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[5]"  /> Crunchy-Toasts | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[6]"  /> Iceberg Lettuce | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[7]"  /> Watercress | $1.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[9]"  /> Cheddar Cheese | $0.99
		<br/>
		<input class="text" type="checkbox" name="toppingSelections[10]"  /> Beans | $0.99
		<br/>
		<br/>
		<input class="button" type="submit" value="Add to Cart" />
		</form>
	';

}

function displayNumberSelectMenu() {
	echo '
	 <select name="quantity">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
  
	';
}

displayForm($salads);


if (!isset($_POST['salads'])) {
	echo '<p class="welcome">Welcome!</p>';
} else {
	$saladIndex = $_POST['salads'];
	$selectedSalad = $salads[$saladIndex];

	
	echo '<p class="order">Your Salad: </p>';
	print_r($selectedSalad->Name);
	// print_r($selectedSalad->Price);
	displayNumberSelectMenu();

	if (!empty($_POST['toppingSelections'])) {
		echo '<p class="order">Your Toppings:</p> ';
		foreach ($_POST['toppingSelections'] as $topping => $i) { 

			$selectedTopping = $toppingSelections[$topping];
			print($selectedTopping->Name);
			print(" ");
			// print_r($selectedTopping->Price);

			$selectedSalad->addTopping($selectedTopping);
	    }
	}

	echo '<p class="order">Total Price: </p>';
	print_r($selectedSalad->TotalPrice());
	
	print(" ");
	$quantity = $_POST['quantity'];
	$order = new Order($selectedSalad, $quantity);
	$cart[] = $order;
	// print("Summary: ");

	// foreach ($cart as $index => $order) {
	// 	$order->printSummary();
	// }

	
}




?>
</div>
</body>
</html>
