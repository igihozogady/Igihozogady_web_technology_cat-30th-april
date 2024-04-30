<?php
session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - E-Huye Finder</title>
  <link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>
<nav>
  <div class="logo">E-Huye Finder</div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about us.php">About</a></li>
    <li><a href="contact us.php">Contact Us</a></li>
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

<section class="contact-section">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <div class="info">
        <h3>Address</h3>
        <p>123 Huye Street <br>Butare, Rwanda</p>
      </div>
      <div class="info">
        <h3>Email</h3>
        <p>info@ehuyefinder.com</p>
      </div>
      <div class="info">
        <h3>Phone</h3>
        <p>+250 786789813</p>
      </div>
    </div>
    <div class="contact-form">
      <h3>Send Us a Message</h3>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit" class="btn">Send</button>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>About Us</h4>
      <p><p>We are about to bring you good services only.</p></p>
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
  <div class="footer-bottom">
    <p>&copy; 2024 E-Huye Finder. All rights reserved.</p>
  </div>
</footer>

</body>
<style type="text/css">
    /* Add this to your existing CSS file */

.contact-section {
  padding: 50px 0;
  text-align: center;
}

.contact-section h2 {
  margin-bottom: 30px;
}

.contact-info {
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
}

.info {
  margin: 0 20px;
}

.info h3 {
  margin-bottom: 10px;
}

.contact-form {
  max-width: 600px;
  margin: 0 auto;
}

.contact-form h3 {
  margin-bottom: 20px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.contact-form textarea {
  height: 150px;
}

.btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

.btn:hover {
  background-color: #555;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  padding: 30px;
  background-color: #333;
  color: #fff;
}

.footer-section {
  flex: 1;
  margin-right: 20px;
}

.footer-section h4 {
  margin-bottom: 10px;
}

.footer-section p {
  margin-bottom: 20px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-bottom {
  background-color: #222;
  padding: 10px 0;
  text-align: center;
  color: #fff;
}

</style>
</html>
