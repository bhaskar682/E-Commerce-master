<?php
include('header.php');
include('dbconnection.php');
$query = mysqli_query($con,"SELECT * FROM `category`");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product Category</title>
</head>
<script type="text/javascript">
	function addItems()
	{	
		var formdata = new FormData(document.getElementById('Add_Items'));
		
		$.ajax({
			type: "POST",
			url: "AddItems.php",
			data: formdata,
			processData: false,
  			contentType: false,
			cache:false,
			success: function(html){
				$('#msg').html(html);
						setTimeout(function(){
					window.location.reload();
				 },3000)
		
				

			}
		});
		return false;

	}
	
</script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-10">
				
				<form id="Add_Items" method="post" enctype="multipart/form-data" style="position: absolute;top:100px"> 
				<h1>Add Product Items</h1>
								  <p id="msg" ></p>	  

				<br>
				<hr>
				<div class="row">
					<div class="col-sm-5">
					<div class="form-group">
					    <label for="product_name">Product Category</label>
					    <select name="product_category" class="form-control">
					    <option>Select Category</option>
					    <?php 
					    	while($row = mysqli_fetch_array($query))
					    	{
					    		?>
					    			
					    			<option value="<?php echo $row['Category'];?>"><?php echo $row['Category']; ?></option>
					    		
					    		<?php
					    	}
					    ?>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="product_name">Product Name</label>
					    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
					  </div>
					  <div class="form-group">
					    <label for="product_image">Product Image</label>
					    <input type="file" class="form-control" name="product_image" placeholder="Product Image" required>
					  </div>
					  
					</div>
					<div class="col-sm-5">
					 <div class="form-group">
					    <label for="product_image">Product Price</label>
					    <input type="text" class="form-control" name="product_price" placeholder="Product Price" required>
					  </div>
					   <div class="form-group">
					    <label for="product_image">Discount On Product</label>
					   <select name="product_discount" class="form-control">
					   	<option >Select Discount (Optional)</option>
					   	<option value="5">5%</option>
					   	<option value="10">10%</option>
					   	<option value="15">15%</option>
					   	<option value="20">20%</option>

					   </select>
					  </div>
					   <div class="form-group">
					    <label for="product_image">Product Discription</label>
					    <textarea class="form-control" name="product_discription" placeholder="Write Discription About Product" required></textarea>
					  </div>
					</div>
				</div>
				  
<input type="submit" name="submit" onclick="return addItems()" value="Submit" class="btn btn-primary ">
				  
				 <input type="submit" name="reset" value="Reset" class="btn btn-warning"> 
				  
				  
				</form>
			</div>
		</div>
	</div>
</body>
</html>



<?php
include('footer.php');
?>