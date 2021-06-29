<?php
include("dbconnection.php");

$query1 = mysqli_query($con,"SELECT * FROM `product_category`");
$output1 = "";

$output1 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>Product Category</th>
						<th>Product Name</th>
						<th>Product Image</th>
						<th>Product Count</th>
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
					<td>'.$row1['Product_Category'].'</td>
					<td>'.$row1['Product_Name'].'</td>
					<td><img src="'.$row1['Product_Image'].'" height="50px" width="50px"></td>
					<td>'.$row1['Product_Cout'].'</td>
					<td><button onclick="deleteProductCategory('.$row1["ID"].')" class="btn btn-outline-danger">Delete</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output1 .= '</table>';
echo $output1;

?>