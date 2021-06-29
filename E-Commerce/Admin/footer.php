	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Your Data</h4>
        <p id="msg"></p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_detail">


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
		
		$(document).ready(function(){
		
		$.ajax({
			url:'ViewProductPHPCode.php',
			type: 'POST',
			success:function(html){
				$('.product').html(html);
			}
		});
	});

	function category()
	{	
		var product_category = document.getElementById('product_cate').value;
	
		var dataString ={
			product_category: product_category
		};

		$.ajax({
			type: "POST",
			url: "category.php",
			data: dataString,
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
	function addCategory()
	{	
		var product_category = document.getElementById('product_category').value;
		var product_name = document.getElementById('product_name').value;
		var product_image = document.getElementById('product_image').value;
		var formdata = new FormData(document.getElementById('add-cat'));
		// var dataString ={
		// 	product_category: product_category,
		// 	product_name: product_name,
		// 	product_image: product_image

		// };

		$.ajax({
			type: "POST",
			url: "AddCategory.php",
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

	$(document).ready(function(){
		
		$.ajax({
			url:'ViewCategoryPHPCode.php',
			type: 'POST',
			success:function(html){
				$('.category').html(html);
			}
		});
		$.ajax({
			url:'CategoryPHPCode.php',
			type: 'POST',
			success:function(html){
				$('.avail_category').html(html);
			}
		});
	});



	function deleteData(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteProduct.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}
	function deleteCategory(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteCategory.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}
	function deleteProductCategory(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteProductCategory.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}
		function updateData(id)
		{
			var dataString ={
				id: id,
			};

			
			$.ajax({
				url: 'update.php',
				type: 'POST',
				data:dataString,
				success:function(data)
				{
					$('#modal_detail').html(data);
					$('#myModal').modal("show");
					
				}

			});
		}

		$(document).ready(function()
		{
			$.ajax({
				url:'ViewOrderDetails.php',
				type:'POST',
				success:function(html){
					$('#orderdetails').html(html);
				}
			});

		});

		$(document).ready(function()
		{
			$.ajax({
				url:'ViewOrderTable.php',
				type:'POST',
				success:function(html){
					$('#ordertable').html(html);
				}
			});

		});

	function deleteOrderDetails(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteOrderDetails.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}
	function deleteOrderTable(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteOrderTable.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}

	$(document).ready(function()
		{
			$.ajax({
				url:'ViewUser.php',
				type:'POST',
				success:function(html){
					$('#user').html(html);
				}
			});

		});

	function deleteUser(id)
	{
		dataString = {
			id: id
		}
		$.ajax({
			url: 'deleteUser.php',
			type: 'POST',
			data: dataString,
			success:function(html)
			{
				$('#msg').html(html);
				setTimeout(function(){
					window.location.reload();
				},3000);
			}
		});
	}


</script>


	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="vendors/scripts/dashboard2.js"></script>
</body>

<!-- Mirrored from technext.github.io/deskapp2/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 05:43:54 GMT -->
</html>