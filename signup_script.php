<?php
require "Includes/common.php";
$email = $_POST['email_of_user'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email,$email))
{
	echo "Enter correct email id";
	header('location:signup.php');
}
$password=$_POST['password_of_user'];


$fetch_query="SELECT email FROM users WHERE email='$email'";//THE SECOND PARAMETER i.e $email must be in single quotes
$run_fetch_query=mysqli_query($con,$fetch_query) or die(mysqli_error($con));
if(mysqli_num_rows($run_fetch_query)>0)
{
	$_SESSION['email_error']="Email already exists";
	header('location:signup.php');
	exit();//EXIT FUNCTION WILL EXIT ALL BELOW PHP CODE
}
if (strlen($password) < 6) {
	$_SESSION['length_error']="Password must be 6 characters long";
    header('location:signup.php');
	exit();
}

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$encrypt=md5($password);
$name=mysqli_real_escape_string($con,$_POST['name_of_user']);
$contact=mysqli_real_escape_string($con,$_POST['contact_of_user']);
$city=mysqli_real_escape_string($con,$_POST['city_of_user']);
$address=mysqli_real_escape_string($con,$_POST['address_of_user']);
$insert_query="INSERT into users (name,email,password,contact,city,address) values('$name','$email','$encrypt','$contact','$city','$address')" or die($insert_query);
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
$_SESSION['user_id']=mysqli_insert_id($con);
$_SESSION['email_of_user']=$email;
header('location:products.php');
?>