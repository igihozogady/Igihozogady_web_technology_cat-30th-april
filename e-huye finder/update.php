<?php
session_start();
if (!isset($_SESSION['password'])) {
	header("location:login.php");
}
?>


<?php
include "connection.php";
if (isset($_POST['btn'])) {
	# code...

$id=$_GET['edit'];
$productname=$_POST['productname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$update="UPDATE products SET Name='$productname', Quantity='$quantity', Price='$price' WHERE Id='$id' ";
$chek=mysqli_query($conn,$update);
if ($chek) {
header('location:boughtproduct.php');
}
else
{
	echo "fhj";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>updatin</title>
</head>
<body>
<form method="POST" action="">
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="2" class="head">update and change</td>
		</tr>
             <tr>
			<div class="form-group"><td><label for="product">productname</label></td>
			<td><input type="text" class="form-control" name="productname" placeholder="Enter quantity"></td>
			</div></tr>
			<tr>
			<div class="form-group"><td><label for="quantity">quantity</label></td>
			<td><input type="text" class="form-control" name="quantity" placeholder="Enter quantity"></td>
			</div></tr>

			<tr>
			<div class="form-group"><td><label for="price">price</label></td>
			<td><input type="text" class="form-control"  name="price" placeholder="enter price"></td>
			</div></tr>

		

              <td colspan="2"><button type="submit" name="btn" class="btn">update</button></td>
			</table>
</body>
</html>

<style type="text/css">
	table
	{
		width: 40%;
		font-family: sans-serif;
		text-transform: capitalize;
		padding: 40px;
		border: none;
		box-shadow: 4px 10px 20px black;
        margin-left: 350px;
	}
	input
	{
		padding: 15px;
		width: 90%;
	}
	button
	{
		padding: 15px;
		background-color: #007bff6b;
		border: none;
		width: 80px;
		cursor: pointer;
	}
	.head
	{
		text-align: center;
		font-family: sans-serif;
		font-size: x-large;
		text-transform: uppercase;
	}

</style>