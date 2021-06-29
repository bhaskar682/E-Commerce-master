<?php
include('dbconnection.php');

$username = $_POST['uname'];
$password = $_POST['psw'];
$password = md5($password);

$mobile = $_POST['mobile'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$sqlquery = "SELECT 1 FROM `usertbl` WHERE `User Name` = '$username'";
$select_result = mysqli_query($con,$sqlquery);
if(mysqli_num_rows($select_result)>0)
{
echo "User is already Exists'";
exit();
}
else{
	$query = mysqli_query($con,"INSERT INTO `usertbl`(`User Name`, `Password`, `Mobile`, `City`, `State`, `Pin Code`) VALUES ('$username','$password','$mobile','$city','$state','$pincode')");
	if($query == true)
	{
		echo "Signup Successfully!";

	}
	else
	{
		echo "Something went wrong!";
	}	
}


?>