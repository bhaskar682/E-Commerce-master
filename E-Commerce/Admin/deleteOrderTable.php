<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `order_table` WHERE `ID`= '$id'");
if($query)
{
	echo "Data Of Order Table is  Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>