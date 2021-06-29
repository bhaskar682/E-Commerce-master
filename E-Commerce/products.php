<?php
include('dbconnection.php');
include('header.php');
if($username==false)
{
	echo "<script>alert('You are not loggedIn ')</script>";
	echo "<script>window.location='login.php'</script>";
}
 $product = $_POST['product_name'];


$query = mysqli_query($con,"SELECT * FROM `add_product` WHERE `Product_Name` = '$product'");
?>

<br><br>
<!-- <div class="container">
	<form method="post" id="myform">
	<h1 class="text-center text-primary">Filter Your Product! </h1>
		<div class="row">
			<div class="col-sm-6">
				<div class="input-group mb-3">
	  		<div class="input-group-prepend">
	    		<div class="input-group-text">
	      		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-3 " placeholder="Product" disabled="">
		</div>
				<div class="input-group mb-3">
	  		<div class="input-group-prepend ">
	    		
	    		<div class="input-group-text">
	      		<input type="radio" name="Product" value="T-Shirt">	
	    		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-2" placeholder="T-Shirt" disabled="">
		</div>
		<div class="input-group mb-3">
	  		<div class="input-group-prepend">
	    		
	    		<div class="input-group-text">
	      		<input type="radio" name="Product" value="Shirt">	
	    		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-2" placeholder="Shirt" disabled="">
		</div>

		<div class="input-group mb-3">
	  		<div class="input-group-prepend">
	    		
	    		<div class="input-group-text">
	      		<input type="radio"  name="Product" value="Jeans">	
	    		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-2" placeholder="Jeans" disabled="">
		</div>
		<div class="input-group mb-3">
	  		<div 

	  		class="input-group-prepend">
	    		
	    		<div class="input-group-text">
	      		<input type="radio"  name="Product" value="Shoes">	
	    		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-2" placeholder="Shoes" disabled="">
		</div>
		

			</div>
			<div class="col-sm-6">
							<div class="input-group mb-3">
	  		<div class="input-group-prepend">
	    		<div class="input-group-text">
	      		</div>
	  		</div>
	  		<input type="text" class="form-control col-sm-3" placeholder="Product Price" disabled="">
		</div>
		<div class="input-group mb-3">
	  	Min Value:<input type="range" name="rangeInput" min="0" max="1000" onchange="updateTextInput(this.value);">
<input type="text" id="textInput" value="">
		</div>
		<div class="input-group mb-3">
	  		<input type="submit" name="submit" value="Submit" onclick="return getResult()" class="btn btn-outline-primary col-sm-3">
		</div>
</form>
			</div>
		</div>
		
	<hr> -->
	<div class="container">
		<h1 class="text-center text-primary"><?php echo $product ?></h1>
		<hr>
	<div class="row mt-4" >
		<?php
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
							     	<input type="number" min="1" name="quantity" placeholder="Quantity" class="form-control col-lg-6" required>

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


		</div>
	</div>

<script>
</script>
<?php
include('footer.php');
?>