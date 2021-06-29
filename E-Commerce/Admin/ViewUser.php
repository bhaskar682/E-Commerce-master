<?php
include("dbconnection.php");

$query1 = mysqli_query($con,"SELECT * FROM `usertbl`");
$output1 = "";

$output1 .= '<table class="table table-striped" border="1px">
				<thead>
					<tr>
						<th>SR No.</th>
						<th>User Name</th>
						<th>Mobile</th>
						<th>City</th>
						<th>State</th>
						<th>Pincode</th>
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
					<td>'.$row1['Mobile'].'</td>
					<td>'.$row1['City'].'</td>
					<td>'.$row1['State'].'</td>
					<td>'.$row1['Pin Code'].'</td>
					<td><button onclick="deleteUser('.$row1["ID"].')" class="btn btn-outline-danger">Delete</button></td>
				</tr>
			</tbody>
	';
	$i++;
}
$output1 .= '</table>';
echo $output1;

?>