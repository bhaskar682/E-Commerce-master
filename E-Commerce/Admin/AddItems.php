<?php
	include('dbconnection.php');
	$product_category = $_POST['product_category'];
	$product_name = $_POST['product_name'];
	$product_image = $_FILES['product_image']['name'];
	$product_price = $_POST['product_price'];
	$product_discount = $_POST['product_discount'];
	$product_discription = $_POST['product_discription'];
	
	$store = "Product_Image/".$product_image;
	if(move_uploaded_file( $_FILES['product_image']['tmp_name'], $store ))
	{
		$query = mysqli_query($con,"INSERT INTO `add_product`(`Product_Category`, `Product_Name`, `Product_Image`, `Product_Price`, `Product_discount`, `Product_discription`) VALUES ('$product_category','$product_name','$store','$product_price','$product_discount','$product_discription')");
		if($query)
		{
			echo "Product Added Successfully!";
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

			