<?php
session_start();

$name = $_POST['name0'];
$price = $_POST['name1'];
$quantity = $_POST['name2'];
$submit = $_POST['submit'];

$product = array($name,$price,$quantity);

if($submit == "Update")
{
	$_SESSION['cart'][$name] = $product;
}
else if($submit == "Delete")
{
	unset($_SESSION['cart'][$name]);
}

header('location: viewCart.php');
?>