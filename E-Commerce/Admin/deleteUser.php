<?php
include('dbconnection.php');
$id = $_POST['id'];

$query = mysqli_query($con,"DELETE FROM `usertbl` WHERE `ID`= '$id'");
if($query)
{
	echo "User Deleted Successfully!";
}
else
{
	echo "Something Went wrong!";
}

?>