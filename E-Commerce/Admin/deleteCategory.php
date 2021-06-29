<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `category` WHERE `ID`= '$id'");
if($query)
{
	echo "Category Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>