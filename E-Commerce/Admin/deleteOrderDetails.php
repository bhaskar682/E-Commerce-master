<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `order_details` WHERE `ID`= '$id'");
if($query)
{
	echo "Order Details Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>