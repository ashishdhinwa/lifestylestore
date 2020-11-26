<?php
$item_id=$_GET['id'];

require "Includes/common.php";
$insert_query="INSERT INTO users_items(user_id, item_id, status) VALUES('{$_SESSION['user_id']}', '$item_id', 'Added to cart')" or die(mysqli_error($con));
$result_query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:products.php');
?>