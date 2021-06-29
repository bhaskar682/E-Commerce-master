<?php
session_start();
$name = $_POST['Product_Name'];
$price = $_POST['Product_Price'];
$quantity = $_POST['quantity'];

$product = array($name,$price,$quantity);
$_SESSION['cart'][$name] = $product;
header('location: viewCart.php');

?>