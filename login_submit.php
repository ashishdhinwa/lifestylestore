<?php
require "Includes/common.php";

$name=mysqli_real_escape_string($con,$_POST['email_of_user']);

$password=mysqli_real_escape_string($con,$_POST['password_of_user']);
$encrypted=md5($password);

$fetch="SELECT id,email FROM users WHERE email='$name' && password='$encrypted'";
$query_result=mysqli_query($con,$fetch) or die(mysqli_error($con));

if(mysqli_num_rows($query_result)==0)
{
    $_SESSION['errorMsg']="Invalid Credientials";
	header('location:login.php');
	
}
else{
	$row=mysqli_fetch_array($query_result);//This function will fetch all data of the row returned by $query_reult
	$_SESSION['email_of_user']=$row['email'];
	$_SESSION['user_id']=$row['id'];
	header('location:products.php');
}


?>