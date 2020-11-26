<?php
include "Includes/common.php";//you might be thinking that why we need to include common.php in each page.This is because in common.php we 
//Have included connection to database and if we made connection in one page then it will not remain in other page.Each page require a 
//new connection to database so we need to write connection query.Also session_start() function must be included.It will not start a new
//session if the session already existing then it will resume that session.NOTE : In one page we cannot start session more tha once.
$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
$re_new_password=$_POST['retype_new_password'];
$encrypt_old_password=md5($old_password);
$fetch_query="SELECT password FROM users WHERE email='{$_SESSION['email_of_user']}' and password='$encrypt_old_password'" or die (mysqli_error($con));
$run_fetch_query=mysqli_query($con,$fetch_query) or die(mysqli_error($con));
if(mysqli_num_rows($run_fetch_query)==0)
{
	$_SESSION['error_Msg']="Invalid old passwword";
	header('location:settings.php');
}
if($new_password!=$re_new_password)
{
	$_SESSION['error_Msg_two']="New passwords not matching";
	header('location:settings.php');
}
if(mysqli_num_rows($run_fetch_query)!=0 and $new_password==$re_new_password)
{   
    $email=$_SESSION['email_of_user'];
    $encrypt_new_password=md5($new_password);
	$update="UPDATE users  SET password='$encrypt_new_password' where email='$email'" or die(mysqli_error($con));
	$run_update_query=mysqli_query($con,$update) or die(mysqli_error($con));
	$_SESSION['success_in_changing']="Password successfully updated";
	header('location:settings.php');
}
?>


































