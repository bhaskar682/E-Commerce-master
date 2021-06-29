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
<body>
			<script>
	
			</script>

	<div class="container">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-5">
				
				<form id="add-cat" method="post" enctype="multipart/form-data" style="position: absolute;top:100px"> 
					<h1>Add Product Category</h1>
					<p id="msg"></p>	

					<br>
					<hr>
					  <div class="form-group">
					    <label for="product_name">Product Category</label>
					    <select name="product_category" id="product_category" class="form-control">
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
					    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" required>
					  </div>
					  <div class="form-group">
					    <label for="product_image">Product Image</label>
					    <input type="file" class="form-control" id="product_image" name="product_image" placeholder="Product Image" required>
					  </div>
					  
					  
					<input type="submit" name="submit" onclick="return addCategory()" value="Submit" class="btn btn-outline-primary col-sm-12 col-sm-6 col-sm-3">
				  <br><br>
				<input type="submit" name="reset" value="Reset" class="btn btn-outline-warning col-sm-12 col-sm-6 col-sm-3"> 
					  
					</form>
				</div>
			
			<div class="col-sm-5">
				<form method="post"  style="position: absolute;top:124px;left:20px"> 
				<h3>Add More Product Category</h3>
				<br>
				<hr>
				  <div class="form-group">
				    <label for="product_category">Product Category</label>
				    <input type="text" class="form-control" name="product_cate" id="product_cate" placeholder="Product Category" required>
				  </div>
				   <input type="submit" name="submit" value="Submit" onclick="return category()" class="btn btn-outline-primary col-sm-12 col-sm-6 col-sm-3">
				  </form>
			</div>

		</div>
	</div>

</body>
</html>



<?php
include('footer.php');

?>