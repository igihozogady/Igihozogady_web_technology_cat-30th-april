<?php
session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>About E-Huye Finder</title>
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

<section class="about-section">
  <div class="container">
    <h1>About E-Huye Finder</h1>
    <p>Welcome to E-Huye Finder, your ultimate destination for online shopping. We are committed to providing you with a seamless and enjoyable shopping experience.</p>
    <p>At E-Huye Finder, we offer a wide range of products including clothing, electronics, accessories, and much more. Our goal is to bring you the best selection of products at competitive prices.</p>
    <p>Our dedicated team of professionals works tirelessly to ensure that your shopping experience is top-notch. From our customer service specialists to our logistics coordinators, we are here to assist you every step of the way.</p>
    <h2>Meet Our Team</h2>
    <div class="staff">
      <div class="Manager">
        <img src="img/Boss.jpg" alt="Igihozo Gady">
        <div class="staff-name">Igihozo Gady</div>
        <div class="staff-role">Manager</div>
      </div>
      <div class="staff-member">
        <img src="img/ha.jpg" alt="FLAME">
        <div class="staff-name">Flame</div>
        <div class="staff-role">Logistics Coordinator</div>
      </div>
      <div class="staff-member">
        <img src="img/hey.jpg" alt="Gomez">
        <div class="staff-name">Gomez</div>
        <div class="staff-role">Product Specialist</div>
      </div>
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
    <p>&copy; 2024 My Website. All rights reserved.</p>
  </div>
</footer>

</body>
<style type="text/css">
  /* Add this to your existing CSS file */

.about-section {
  padding: 50px 0;
  background-color: #f8f8f8;
  text-align: center;
}

.about-section h1 {
  margin-bottom: 30px;
}

.about-section p {
  margin-bottom: 20px;
}

.staff {
  display: flex;
  justify-content: center;
  align-items: center;
}

.staff-member {
  margin: 20px;
}

.staff img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 4px solid #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.staff-name {
  font-weight: bold;
  margin-top: 10px;
}

.staff-role {
  color: #777;
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
