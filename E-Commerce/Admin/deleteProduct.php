<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `add_product` WHERE `ID`= '$id'");
if($query)
{
	echo "Product Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>