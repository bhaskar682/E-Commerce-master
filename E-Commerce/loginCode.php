<?php
session_start();
include('dbconnection.php');

// removes backslashes
 $username = stripslashes($_REQUEST['uname']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['psw']);
 $password = md5($password);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
	$query = "SELECT * FROM `usertbl` WHERE `User Name`='$username'
and `Password` ='".$password."' ";
 	$result = mysqli_query($con,$query) or die(mysql_error());
 	$rows = mysqli_num_rows($result);
    if($rows==1)
    {
    	$_SESSION['uname'] = $username;

    	echo "Login Successfully";
    	echo "<script>window.location='index.php'</script>";
      
    }
    else
	{
		echo "Your User Name and Password is Not valid or You are not registered with Us!";
	}


?>
