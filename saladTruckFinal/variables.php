<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$items[] = array();
 //figure out the name of the current page
$greens[] = new Ingredient(1,"Iceberg Lettuce",0,"");
$greens[] = new Ingredient(2,"Romaine Lettuce",0,"");
$greens[] = new Ingredient(3,"Spinach",0,"");
$greens[] = new Ingredient(4,"Arugula",0,"");

$veggies[] = new Ingredient(5,"Tomato",0,"");
$veggies[] = new Ingredient(6,"Cucumber",0,"");
$veggies[] = new Ingredient(7,"Bell Pepper",0,"");
$veggies[] = new Ingredient(8,"Mushroom",0,"");

$meat[] = new Ingredient(9,"Chicken",1.5,"Grilled");
$meat[] = new Ingredient(10,"Salmon",1.5,"Blackened");
$meat[] = new Ingredient(15,"Shrimp",1.5,"Cajun Style");
$meat[] = new Ingredient(11,"Steak",2,"Grilled Flank Steak");

$extras[] = new Ingredient(14,"Croutons",0,"");
$extras[] = new Ingredient(12,"Cheddar Cheese",.25,"");
$extras[] = new Ingredient(13,"Feta Cheese",.5,"");

$order = array();
$subtotal = 0;
//create list of ingredients for reference
$db = array();
foreach ($greens as $i) {
  $db[] = $i;
}foreach ($veggies as $i) {
  $db[] = $i;
}foreach ($meat as $i) {
  $db[] = $i;
}foreach ($extras as $i) {
  $db[] = $i;
}
function printSalad($s){
  $i = $s->getNgrdts();
  echo
    implode(', ',$i).'&nbsp;&times;&nbsp;'.$s->getAmount().
    '&nbsp;&commat;&nbsp;$'.number_format($s->getPrice(),2).'<br>';
}
function addToOrder($s)
{
  $order[] = $s;
}
