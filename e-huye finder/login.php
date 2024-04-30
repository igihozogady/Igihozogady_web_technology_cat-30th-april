<?php
session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <style type="text/css">
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
.nav-links a:hover{

  width: 50px;
  background-color: grey;
  color: black;
}
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1 0 200px;
  margin: 10px;
}

.footer-section h4 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-section li {
  margin-bottom: 5px;
}

.footer-section a {
  color: #fff;
  text-decoration: none;
}

.footer-bottom {
  background-color: #222;
  text-align: center;
  padding: 10px 0;
}

.footer-bottom p {
  margin: 0;
}



  </style>
</head>
<body>
  <nav>
  <div class="logo">E-Huye Finder</div>
  <ul class="nav-links">
     <li><a href="login.php">Home</a></li>
    <li><a href="login.php">About</a></li>
    <li><a href="login.php">contact us</a></li>
    <li><a href="login.php">Products</a></li>
    <li><a href="login.php">Shop</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
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
    <p><a href="Register.php">Admin</a></p>
    <button type="submit" name="login">Login</button>
  </form>
</div>
<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>About Us</h4>
      <p>We are about to bring you good services only.</p>
    </div>
    <div class="footer-section">
      <h4>Website Important Pages</h4>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Refund Policy</a></li>
      </ul>
    </div>
   
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 My Website. All rights reserved.</p>
  </div>
</footer>

</body>


</html>

<?php
if (isset($_POST['login'])) {
include "connection.php";
$em=$_POST['email'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"SELECT * FROM customer where Email='$em' and Password='$pass'");
session_start();
if (mysqli_num_rows($sql)==0) {
  echo "Incorect password or Username";
}
else{
  $_SESSION['password']=$pass;
  header("location:home.php");
}
}
?>