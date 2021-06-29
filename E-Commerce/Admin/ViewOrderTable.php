<?php
include("dbconnection.php");

$query1 = mysqli_query($con,"SELECT * FROM `order_table`");
$output1 = "";

$output1 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>Customer Name</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Mobile</th>
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
					<td>'.$row1['Quantity'].'</td>
					<td>'.$row1['Mobile'].'</td>
					<td><button onclick="deleteOrderTable('.$row1["ID"].')" class="btn btn-outline-danger">Delete</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output1 .= '</table>';
echo $output1;

?>