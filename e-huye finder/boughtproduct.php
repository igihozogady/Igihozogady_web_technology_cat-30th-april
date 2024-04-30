<?php
session_start();
if (!isset($_SESSION['password'])) {
  header("location:login.php");
}
?>

<?php
include "connection.php";
$select="SELECT * FROM products";
$cc=mysqli_query($conn,$select);

 ?>
 <link rel="stylesheet" type="text/css" href="css/shop.css">
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


 <table border="1" cellspacing="0">
 	<tr>
 		<td colspan="7">bought product</td>
 	</tr>
 	<tr>
 		<td>id</td>
 		<td>productname</td>
 		<td>quantity</td>
 		<td>price</td>
 		<td>date</td>
 		<td>update</td>
 		<td>delete</td>
 	</tr>
 	<tr>
 		<?php
     
        while ($row=mysqli_fetch_assoc($cc)) {
        	 ?>
       <td><?php echo $row['Id']; ?></td>
       <td><?php echo $row['Name']; ?></td>
       <td><?php echo $row['Quantity']; ?></td>
       <td><?php echo $row['Price']; ?></td>
       <td><?php echo $row['date']; ?></td>
       <td>
       	<a href="update.php?edit=<?php echo $row['Id'];?>"><button>edit/update</button></a>
       </td>
       <form action="delete.php" method="post">
       <td>
       	<input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
       	<input type="submit" name="" value="delete">
       </td></form>

 	</tr>
  <?php } ?>
 </table>
 
 <style type="text/css">
 	table
 	{
 		width: 40%;
 		margin-left: 400px;
 		margin-right: 200px;
 		margin-top: 100px;
 		text-align: center;

 	}


 </style>