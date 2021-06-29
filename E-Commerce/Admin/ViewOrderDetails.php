<?php
include("dbconnection.php");

$query1 = mysqli_query($con,"SELECT * FROM `order_details`");
$output1 = "";

$output1 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>Customer Name</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Delivery Date</th>
						<th>Payment</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				</thead>


';
$i =1;
while($row1 = mysqli_fetch_array($query1))
{
	$output1 .= '
			<tbody>
				<tr>
					<td>'.$i.'</td>
					<td>'.$row1['User Name'].'</td>
					<td>'.$row1['Product_Name'].'</td>
					<td>'.$row1['Price'].'</td>
					<td>'.$row1['Delivery_Date'].'</td>
					<td>'.$row1['Payment'].'</td>
					<td>'.$row1['Address'].'</td>
					<td><button onclick="deleteOrderDetails('.$row1["ID"].')" class="btn btn-outline-danger">Delete</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output1 .= '</table>';
echo $output1;

?>