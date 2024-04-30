
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="container">
  <form class="login-form" action="" method="POST">
    <h2>Admin</h2>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" name="login">Login</button>
  </form>
</div>
   

		

</body>
</html>
<style type="text/css">
	

  body
  {
  	margin: 0px;

    background: url(img/finder.jpg);
    background-repeat: no-repeat;
   
    font-family: Arial, sans-serif;
  }




</style>
<?php
if (isset($_POST['login'])) {
include "connection.php";
$em=$_POST['email'];
$ema='admin@gmail.com';
$ema=$em;
$pass=$_POST['password'];
$passw='admin';
$passw=$pass;
$sql=mysqli_query($conn,"SELECT * FROM customer WHERE Email='$ema' and Password='$pass'");
session_start();
if (mysqli_num_rows($sql)==0) {
  echo "Incorect password or Username";
}
else{
  $_SESSION['password']=$pass;
  header("location:boughtproduct.php");
}
}
?>
