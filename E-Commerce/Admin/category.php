<?php
	include('dbconnection.php');
	$product_category = $_POST['product_category'];
	$query = mysqli_query($con,"INSERT INTO `category`(`Category`) VALUES ('$product_category')");	
	if($query)
	{
		echo "Category Added Successfully!";
	}
	else
	{
		echo "Something Went wrong!";
	}
?>
			