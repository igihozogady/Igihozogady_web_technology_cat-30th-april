
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>


    <nav>
  <div class="logo">E-Huye Finder</div>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php">About</a></li>
    <li><a href="index.php">contact us</a></li>
    <li><a href="index.php">Products</a></li>
    <li><a href="index.php">Shop</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">search</button>
    </form>
  </div>
</nav>
 <div>
        <h1>Welcome to E-Huye Finder</h1>
        <p>This is the homepage of our website. We Can Find whatever product You Need </p>
    </div>
    </nav>
<div class="container">
  <form class="login-form" action="" method="POST">
    <h2>Login</h2>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <p>Don't Have Account<a href="sign in.php">Register</a></p>
    <p><a href="admin.php">Admin</a></p>
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



nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333;
  padding: 10px;
}

.logo {
  color: #fff;
  font-size: 24px;
  font-weight: bold;
}

.nav-links {
  display: flex;
  list-style: none;
}

.nav-links li {
  margin-right: 20px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;

}
.nav-links li:hover{

  height: 40px;
  background-color: grey;
  color: black;
}



.search-container button:hover {
  background-color: #fff;
  color: #333;
}
</style>
<?php
if (isset($_POST['login'])) {
include "connection.php";
$em=$_POST['email'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"SELECT * FROM customer where Email='$em' and Password='$pass'");
if (mysqli_num_rows($sql)==0) {
  echo "Incorect password or Username";
}
else{
  $_SESSION['password']=$pass;
  header("location:home.php");
  session_destroy();
}
}
?>