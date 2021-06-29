<?php
include('dbconnection.php');
$product = $_POST['product_name'];

$query = mysqli_query($con,"SELECT * FROM `add_product` WHERE `Product_Name` = '$product'");
$output = '';

while($row = mysqli_fetch_array($query))
{
	?>
			<div class="col-md-4 mb-3">
						<div class="card">
							<form method="post" action="addToCart.php">
							<div class="card-header bg-primary text-white">
								<center>
									<?php echo $row['Product_Name'];?>
								</center>
							</div>
							<div class="card-body">
							     <center><img src="Admin/<?php echo $row['Product_Image'];?>" width="200px" width="150px" >
							     	<div class="card-title"><del><?php echo $row['Product_Price'];?></del></div>
							     	<div class="card-title text-danger"><?php echo $row['Product_discount'];?>%Off</div>
							     	<div class="card-title"><?php echo $row['Product_discription'];?></div>
							     	<div class="card-title text-danger">Total Price:<?php echo $total = $row['Product_Price']-$row['Product_Price']*$row['Product_discount']/100;?></div>
							     	<input type="number" name="quantity" placeholder="Quantity" class="form-control col-lg-6" required>

							     </center>
							</div>
							<div class="card-footer">
							<center><?php
								echo "<input type='hidden' name='Product_Name' value='".$row['Product_Name']."' >";
								echo "<input type='hidden' name='Product_Price' value='".$total."' >";
				
						  		echo '<input type="submit" value="Add To Cart" name="addcart" class="btn btn-primary">';
						  		echo "</form>";
						  	?></center>	
							</div>
						</div>
					</div>
			
<?php	
}

?>