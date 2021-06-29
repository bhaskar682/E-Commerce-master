<?php
session_start();
$username = $_SESSION['uname'];
include('dbconnection.php');
$output="";
$query = mysqli_query($con,"SELECT * FROM `order_details` WHERE `User Name` = '$username' ");
$row = mysqli_fetch_array($query);
$query1 = mysqli_query($con,"SELECT * FROM `usertbl` WHERE `User Name` = '$username' ");
$row1 = mysqli_fetch_array($query1);
	$output .='<table class="table  table-bordered">
		<tr>
			<th>Invoice</th>
			<th><form method="Post">
				<input type="submit" name="submit" value="Download Invoice" class="btn btn-outline-primary">
				</form></th>
		</tr>';
			 
			$output .='
			<tr><th>Customer Name</th><td>'.$row['User Name'].'</td></tr>
			<tr><th>Product Name</th><td>'.$row['Product_Name'].'</td></tr>
			<tr><th>Price</th><td class="text-danger">'.$row['Price'].'/-</td></tr>
			<tr><th>Customer Mobile</th><td>'.$row1['Mobile'].'</td></tr>
			<tr><th>Delivery Date</th><td class="text-danger" >'.$row['Delivery_Date'].'</td></tr>
			<tr><th>Delivery Address</th><td>'.$row['Address'].'</td></tr>
			<tr><th>Payment</th><td>'.$row['Payment'].'</td></tr>
			';
			echo $output;


?>
<?php
if(isset($_POST['submit']))
{
$name = 'file.pdf';
//file_get_contents is standard function
$content = file_get_contents($name);
header('Content-Type: application/pdf');
header('Content-Length: '.strlen( $output ));
header('Content-disposition: inline; filename="' . $name . '"');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
echo $output;
}

?>
		