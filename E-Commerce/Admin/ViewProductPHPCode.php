<?php
include("dbconnection.php");

$query1 = mysqli_query($con,"SELECT * FROM `add_product`");
$output1 = "";

$output1 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>Product Category</th>
						<th>Product Name</th>
						<th>Product Image</th>
						<th>Product Price</th>
						<th>Product Discount</th>
						<th>Product Discription</th>
						<th>Action</th>
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
					<td>'.$row1['Product_Price'].' INR</td>
					<td>'.$row1['Product_discount'].'%</td>
					<td>'.$row1['Product_discription'].'</td>
					<td><button onclick="deleteData('.$row1["ID"].')" class="btn btn-outline-danger">Delete</button></td>
					<td><button onclick="updateData('.$row1["ID"].')" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">Update</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output1 .= '</table>';
echo $output1;

?>