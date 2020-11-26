<?php
session_start();
if(!isset($_SESSION['email_of_user']))
	header('location:index.php');
 session_destroy();
 header('location:newindex.php');
?>