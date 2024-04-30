<?php
include "connection.php";
$id=$_POST['Id'];
$delete="DELETE FROM  products WHERE Id='$id'";
$ccc=mysqli_query($conn,$delete);
if ($ccc) {
	header('location:boughtproduct.php');
}


?>