<?php
session_start();

include('dbconnection.php');
$query = mysqli_query($con,"SELECT * FROM `product_category` GROUP BY `Product_Name`");
while($row = mysqli_fetch_array($query))
{
	?>
			<div class="col-md-4 mb-3">
				<form method="post" id="form-data" action="products.php">
						<div class="card" style="box-shadow: 10px 10px grey;">
						
							<div class="card-header bg-primary text-white">
								<center>
									<?php echo $row['Product_Category'];?>
								</center>
							</div>
							<div class="card-body">
							     <center><img src="Admin/<?php echo $row['Product_Image'];?>" width="200px" width="150px" >
							     	<div class="card-title"><?php echo $row['Product_Name'];?></div>
							</center>
							     
							</div>
							<div class="card-footer">
								<input type="hidden" name="product_name" value="<?php echo $row['Product_Name'];?>">
								<center>
								     	<input type="submit" name="submit" value="View More"  class="btn btn-primary ">
								     	</center>
							</div>
						</div>
					</div></form>
<?php	
}
?>


