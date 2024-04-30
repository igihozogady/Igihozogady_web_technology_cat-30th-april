<?php
$conn=new mysqli('localhost','root','','ehuyefinder');
if (isset($_POST['submit'])) {
	

	$Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$Telephone=$_POST['Telephone'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
$insert="INSERT INTO customer VALUES('','$Firstname','$Lastname','$Telephone','$Address','$Email','$Password')";
$c=mysqli_query($conn,$insert);
if ($c) {
		echo "registered successful";
		header("location:login.php");
	}	
else
{
	echo "no".mysqli_error($conn);
}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blue Login Form</title>
	<style>
		body {
			background-color: gray;
			color: white;
			font-family: Arial, sans-serif;
		}
		.container {
			max-width: 400px;
			margin: 0 auto;
			padding: 20px;
			background-color: #007bff6b;
			border-radius: 5px;
		}
		.form-group {
			margin-bottom: 15px;
		}
		.form-control {
			background-color: white;
			border: none;
			border-radius: 5px;
			padding: 10px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}
		.btn {
			background-color: #007bff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			color: white;
			font-size: 16px;
			cursor: pointer;
		}
		.btn:hover {
			background-color: #0062cc;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">sign up</h2>
		<form method="POST" action="">
			<div class="form-group">
				<label for="Firstname">Firstname</label>
				<input type="text" class="form-control" name="Firstname" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label for="Lastname">Lastname</label>
				<input type="text" class="form-control" name="Lastname" placeholder="Enter name">
			</div>
			
			<div class="form-group">
				<label for="Telephone">Telephone</label>
				<input type="text" class="form-control"  name="Telephone" placeholder="Telephone">
			</div>
			<div class="form-group">
				<label for="Address">Address</label>
				<input type="text" class="form-control" name="Address" placeholder="Enter Address">
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="text" class="form-control" name="Email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="Password" placeholder="Enter password">
			</div>
			<button type="submit" class="btn" name="submit">Sign Up</button>
		<h3>Already Have An Account<a href="login.php" style="text-align: right;">Log in</a>
		</h3>
		</form>
	</div>
</body>
</html>