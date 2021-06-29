<?php
	include('header.php');
?>
<div class="container">
	<br><br>
	<h2 align="center">Your Cart <?php echo $username;?></h2>
	<hr>
		<table class="table">
		<thead>
			<tr>
				<th>SR No.</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
				<th>Update</th>
				<th>Delete</th>
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
						echo "<input type='hidden' name='name$key' value='".$value. "'>";
						
							echo "<td>".$value."</td>";

							}
						else if($key == 1)
						{
							echo "<input type='hidden' name='name$key' value='".$value. "'>";
							echo "<td>".$value."</td>";
							$price=$value;
								
						}
						else if($key == 2)
						{
							echo "<td><input type='number' min='1' name='name$key' value='".$value. "'> </td>";
							$quantity=$value;
							$bill = ($price * $quantity);
							$total_quantity +=$quantity;
							$total_price +=$bill ;

						}
				
					}

				
			
			
					
					 

					echo "<td>".$bill."</td>";
					echo '<td><input type="submit" name="submit" value="Update" class="btn btn-warning"></td>';
					echo '<td><input type="submit" name="submit" value="Delete" onclick="return confirm(\'Are you sure? you want to delete Your cart Product\');" class="btn btn-danger"></td>';
					echo "</form>";
					echo '<tr>';		
				}
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>Quantity-:".$total_quantity."</td>";
				echo "<td>Price-:".$total_price."</td>";

				echo "</tr>";
				$_SESSION['total_quantity'] = $total_quantity;
				$_SESSION['total_price'] = $total_price;
			?>			
		</tbody>
		</table>
			<form method="post" action="Checkout.php">
			<input type="hidden" name="product_quantity" value="<?php echo $total_quantity; ?>">
			<input type="hidden" name="product_total" value="<?php echo $total_price; ?>">
		<input type="submit" name="submit" value="Checkout"  class="btn btn-outline-primary col-sm-6" style="float:right;">
		</form>
	</div>
<?php
include('footer.php');
?>