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
  <link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>
  <nav>
  <div class="logo">E-Huye Finder</div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about us.php">About</a></li>
    <li><a href="contact us.php">contact us</a></li>
    <li><a href="Products.php">Products</a></li>
    <li><a href="shop.php">Shop</a></li>
    <li><a href="login.php">log out</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>


 <div class="picture-container">
  <div class="picture">
    <img src="img/imyenda1.jpg" alt="Image 1">
     <div class="text">
    Shoe Shops
  </div>
</div>
  <div class="picture">
    <img src="img/imyenda.jpg" alt="Image 2">
     <div class="text">
    Clothes Shops
  </div>
  </div>
  <div class="picture">
    <img src="img/resto1.jpg" alt="Image 3">
     <div class="text">
    Restaurant and Reservations
  </div>
  </div>
  <div class="picture">
    <img src="img/food.jpg" alt="Image 4">
     <div class="text">
    Fast Foods
  </div>
  </div>
  <div class="picture">
    <img src="img/accessory.jpg" alt="Image 5">
     <div class="text">
    Tools and Accessories
  </div>
  </div>
  <div class="picture">
    <img src="img/beauty.jpg" alt="Image 6">
     <div class="text">
    Beauty Products
  </div>
  </div>
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