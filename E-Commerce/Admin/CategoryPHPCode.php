<?php
include("dbconnection.php");
$query2 = mysqli_query($con,"SELECT * FROM `category`");

$output2 = "";
$output2 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>Product Category</th>
						<th>Action</th>
					</tr>
				</thead>


';
$i =1;
while($row2 = mysqli_fetch_array($query2))
{
	$output2 .= '
			<tbody>
				<tr>
					<td>'.$i.'</td>
					<td>'.$row2['Category'].'</td>
					<td><button onclick="deleteCategory('.$row2["ID"].')" class="btn btn-outline-danger">Delete</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output2 .= '</table>';
echo $output2;
?>
