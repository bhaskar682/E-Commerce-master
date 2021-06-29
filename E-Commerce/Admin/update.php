<?php
include('dbconnection.php');
$id = $_POST['id'];
	$query = mysqli_query($con,"SELECT * FROM `add_product` WHERE `ID` ='$id' ");
	$row = mysqli_fetch_array($query);
	?>
	
	<form method="post" id="formdata">
	<input type="text" name="id" id="Product_id" class="form-control" value="<?php echo $id;?>">
    <input type="text" name="Product_Category" id="Product_Category" class="form-control" value="<?php echo $row['Product_Category'];?>"><br>
	<input type="text" name="Product_Name" id="Product_Name"  class="form-control" value="<?php echo $row['Product_Name'];?>" ><br>
	<input type="file" name="Product_Image"  id="Product_Image" class="form-control" value="<?php echo $row['Product_Image'];?>" ><br>
	<input type="text" name="Product_Price" id="Product_Price" class="form-control" value="<?php echo $row['Product_Price'];?>" ><br>

	<input type="text" name="Product_discount"  id="Product_discount" class="form-control" value="<?php echo $row['Product_discount'];?>" ><br>
	<input type="text" name="Product_discription" id="Product_discription" class="form-control" value="<?php echo $row['Product_discription'];?>">
			<button type="button" onclick="return UpdateValues()" class="btn btn-primary">Update</button>
			</form>

<script type="text/javascript">
	function UpdateValues()
	{
		var formdata = new FormData(document.getElementById('formdata'));
	
	$.ajax({
			type: "POST",
			url: "updateValues.php",
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
