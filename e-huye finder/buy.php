
<?php
session_start();
if (!isset($_SESSION['password'])) {
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>buying</title>
	<link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>
	<nav>
  <div class="logo">E-Huye Finder</div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about us.php">About</a></li>
    <li><a href="Products.php">Products</a></li>
    <li><a href="shop.php">Shop</a></li>
    <li><a href="contact us.php">contact us</a></li>
    <li><a href="contact us.php">log out</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
<form method="POST" action="">
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="2" class="head">fill table and click buy</td>
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

			<tr>
			<div class="form-group"><td><label for="Address">date</label></td>
			<td><input type="date" class="form-control" name="date"></td>
			</div><tr>

              <td colspan="2"><button type="submit" name="btn" class="btn">buy</button></td>
              <tr>
              	<td colspan="2" style="text-align: center;">
              		

<?php
include "connection.php";
if (isset($_POST['btn'])) {


$productname=$_POST['productname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$date=$_POST['date'];
$buy="INSERT INTO products VALUES('','$productname','$quantity','$price','$date')";
$check=mysqli_query($conn,$buy);
if ($check) {
	echo "product bought";
}
else
{
	echo "failed".mysqli_error($conn);
}
}
?>

              	</td>
              </tr>
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
