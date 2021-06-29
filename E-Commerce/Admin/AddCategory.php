<?php
	include('dbconnection.php');
	$product_category = $_POST['product_category'];
	$product_name = $_POST['product_name'];
	$product_image = $_FILES['product_image']['name'];
	// echo "<pre>";
	// print_r($_FILES);
	// die();
	$store = "Upload/".$product_image;
	if(move_uploaded_file( $_FILES['product_image']['tmp_name'], $store ))
	{
		$query = mysqli_query($con,"INSERT INTO `product_category`(`Product_Category`, `Product_Name`, `Product_Image`, `Product_Cout`) VALUES ('$product_category','$product_name','$store',0)");
		if($query)
		{
			echo "Category Added Successfully!";
		}
		else
		{
			echo "Something Went wrong!";
		}
	}
	else
	{
		echo 'Problem in Uploading Images';
	}
?>
			