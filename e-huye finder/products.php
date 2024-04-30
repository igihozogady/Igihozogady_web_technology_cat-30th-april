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
	<link rel="stylesheet" type="text/css" href="css/product.css">
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
    <li><a href="index.php">log out</a></li>
  </ul>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
	<div class="products-container">
  <div class="product-card"><a href="buy.php">
    <img src="img/imyenda.jpg" alt="Product 1">
    <h3>T-Shirts&Sweaters</h3>
    <p>10,000Rwf</p></a>
  </div>
  <div class="product-card"><a href="buy.php">
    <img src="img/imyenda1.jpg" alt="Product 2">
    <h3>Shoes&Sneakers</h3>
    <p>15,000Rwf->40,000Rwf</p></a>
  </div>
  <div class="product-card"><a href="buy.php">
    <img src="img/food.jpg" alt="Product 3">
    <h3>Fast Foods</h3>
    <p>200Rwf->3500Rwf</p></a>
  </div>
  <div class="product-card"><a href="buy.php">
    <img src="img/beauty.jpg" alt="Product 4">
    <h3>Beauty Products</h3>
    <p>500Rwf->20,000Rwf</p></a>
  </div>
  <div class="product-card"><a href="buy.php">
    <img src="img/R.jpg" alt="Product 5">
    <h3>Inside House Materials</h3>
    <p>120,000Rwf->800,000Rwf</p></a>
  </div>

  <div class="product-card"><a href="login.php">
    <img src="img/set.jpg" alt="Product 8">
    <h3>Materials and Accessories</h3>
    <p>45,000RWF</p></a>
  </div>
  <div class="product-card"><a href="login.php">
    <img src="img/set.jpg" alt="Product 9">
    <h3>Product 9</h3>
    <p>$4.99</p></a>
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