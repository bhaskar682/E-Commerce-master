<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `product_category` WHERE `ID`= '$id'");
if($query)
{
	echo "Category Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>