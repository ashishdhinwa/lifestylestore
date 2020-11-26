<?php
include "Includes/common.php";
$user__id=$_SESSION['user_id'];
$item__id=$_GET['_id'];

$delete_query="DELETE FROM users_items WHERE item_id=$item__id and user_id=$user__id" or die(mysqli_error($con));
$run_delete_query=mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>