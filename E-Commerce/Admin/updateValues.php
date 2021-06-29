
<?php
	include('dbconnection.php');
	$id = $_POST['id'];
	$Product_Category = $_POST['Product_Category'];
	$Product_Name = $_POST['Product_Name'];
	$Product_Price = $_POST['Product_Price'];
	$Product_Image = $_FILES['Product_Image']['name'];
	
	$store = "Product_Image/".$Product_Image;
	$Product_discount = $_POST['Product_discount'];
	$Product_discription = $_POST['Product_discription'];
	
	if(move_uploaded_file( $_FILES['Product_Image']['tmp_name'], $store))
	{	

		$query = mysqli_query($con,"UPDATE `add_product` SET `Product_Category`='$Product_Category',`Product_Name`='$Product_Name',`Product_Image`='$store',`Product_Price`='$Product_Price',`Product_discount`='$Product_discount',`Product_discription`='$Product_discription' WHERE `ID` = '$id' ");
		if($query == true)
		{
			echo "Data Updated Successfully!";
		}
		else
		{
			echo "Something Went Wrong!";		
		}
		
	}
	?>