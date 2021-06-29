<?php
include('header.php');
include('connection.php');
$products = $_SESSION['cart'];
$total_quantity = $_SESSION['total_quantity'];
$total_price = $_SESSION['total_price'];

?>
<div class="container">
<br><br><br><br>
<div class="card">

	<div class="card-header bg-primary text-white text-center"> Order Details</center></div>
	<form method="post">
	<div class="card-body">
		<?php

				echo "<tr>";
				echo "<td><h1>Order Details</h1></td>";
				echo "</tr>";			
			
		?>

			<table class="table">
		<thead>
			<tr>
				<th>SR No.</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$bill = 0;
			$nu =1;
				foreach($_SESSION['cart'] as $products)
				{
					
					$price=0;
					$quantity=0;
					echo '<tr>';
					echo '<td>'; echo $nu++; '</td>';
					echo "<form action='editCart.php' method='post'>";
					foreach($products as $key => $value)
					{
						if($key == 0)
						{
						echo "<input type='hidden' name='product_name[]' value='".$value. "'>";
								
							echo  "<td>".$value."</td>";

							}
						else if($key == 1)
						{
							echo "<input type='hidden' name='name$key' value='".$value. "'>";
							echo "<td>".$value."</td>";
							
								
						}
						else if($key == 2)
						{
							echo "<td>".$value. "</td>";

						}


				
					}
												 

		}
				$charges = 40;
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td class='text-danger'>Delivery Charges: 40</td>";
				echo "<td>Quantity-:".$total_quantity."</td>";
				echo "<td class='text-danger'>Price-:".$total_price +=$charges."</td>";

				echo "</tr>";
				echo "<tr>";
				echo "<td><h1>Pyament Option</h1></td>";
				echo "</tr>";
				echo "<tr>";

				echo "<td><input type='radio'value='Cash On Delivery' name='payment'> Cash On Delivery </td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td><h1>Your Details</h1></td>";
				echo "</tr>";
				include('userdata.php');
				$mobile = $row['Mobile'];

				echo "<tr><td><input type='text' name='address' class='form-control' placeholder='Delivery Address'> </td></tr>";
				echo "<tr><td><input type='submit' name='add-data' value='Submit' class='btn btn-outline-primary'></td></tr>";
				echo "</form>";	

				
			?>	
			

		</tbody>
		</table>
	</div>
	<?php
	if(isset($_POST['add-data']))
	{
		extract($_POST);
		$product_name = $_POST['product_name'];
		$check="";
		foreach($product_name as $value)
		{
			
				 $check =$check.",".$value;
			
		}
		$check = trim($check,",");

		date_default_timezone_set('Asia/Kolkata');

		$date=Date('d:M:y', strtotime('+5 days'));

		echo $date;
		$query1 = mysqli_query($con,"INSERT INTO `order_table`(`User Name`, `Product_Name`, `Price`, `Quantity`, `Mobile`) VALUES ('$username','$check','$total_price','$total_quantity','$mobile')");
		$query2 = mysqli_query($con,"INSERT INTO `order_details`(`User Name`, `Product_Name`, `Price`, `Delivery_Date`, `Payment`,`Address`) VALUES ('$username','$check','$total_price','$date','$payment','$address')");
		if($query1==true && $query2== true)
		{
			echo "<script>alert('Inserted Successfully');</script>";
			echo "<script>window.location='Invoice.php'</script>";
		}
		else
		{
			echo "<script>alert('Not Inserted')</script>";
		}
	}
?>
	<center>
	<div class="card-footer ">
		<input type="submit" name="load_payment" value="Load Payment" class="btn btn-outline-primary ">

	</div>
</center>
</div>
</div>
<?php
include('footer.php');
?>