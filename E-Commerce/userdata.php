<?php
session_start();
$username = $_SESSION['uname'];

include('dbconnection.php');
	
	$query = mysqli_query($con,"SELECT * FROM `usertbl` WHERE `User Name`= '$username' ");
	$row = mysqli_fetch_array($query);
	echo "<tr><th>User Name</th>";
	echo "<td>"; echo $row['User Name']; echo "</td>";
	echo "<tr><th>Mobile</th>";
	echo "<td>"; echo $row['Mobile']; echo "</td>";
	echo "<tr><th>City</th>";
	echo "<td>"; echo $row['City']; echo "</td>";
	echo "<tr><th>State</th>";
	echo "<td>"; echo $row['State']; echo "</td>";
	echo "<tr><th>Pin Code</th>";
	echo "<td>"; echo $row['Pin Code']; echo "</td>";
?>