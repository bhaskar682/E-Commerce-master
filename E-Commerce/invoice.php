<?php
include('header.php');
include('connection.php');
?>
<div class="container">
<br><br><br><br>
<div class="card">

	<div class="card-header bg-primary text-white text-center"> Invoice</center></div>
	
	<div class="card-body">

		<table class="table  table-bordered">
		
		<?php
		include('orderdetails.php');

			
		?>
				

		
		</table>
	</div>

	<center>
</center>
</div>
</div>
<?php
include('footer.php');
?>