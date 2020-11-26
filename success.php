<?php
require "Includes/common.php";
if(!isset($_SESSION['email_of_user']))
header('location:index.php');
$user_id=$_SESSION['user_id'];
$query="SELECT * FROM users_items INNER JOIN users ON users.id=users_items.user_id";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($query_result)==0)
{	$_SESSION['noitemmsg']="Please add some items";
    header('location:products.php');
}
else{
	$row=mysqli_fetch_array($query_result);
    $row['status']='confirmed';

?>
<!DOCTYPE html>
<html>
    <head>
	     
        <title>Thanks for visiting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type="description" content="Search for fashion">
        <meta type="keywords" content="Lifestyle,cameras,shirts,watches">
        <meta type="language" content="english">
        <meta type="author" content="ashishdhinwa">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/success.css" rel="stylesheet" type="text/css"/>
    </head>
	<body>
<?php
	 include 'Includes/header.php';
	?>
	
				
	    <div id="banner_image">
		<div class="container">
		   <div id="banner_content">
		   <h2 style="margin-top:-20px;">Your Order Has Been Placed<h2>
		   <img style id="im1" src="items/orderplaced1.gif"></img>
		   <h2 style="margin-bottom:10px;">Thanks For Purchasing With Us !!</h2>
		   <img id="im2"src="items/purchaseagain.gif" style="max-height:20%;max-width:20%"></img>
		<p style="margin-top:10px;">Look For More</p><br>
		   <a href="products.php" class="btn btn-danger btn-lg-active">Shop Now</a>
		</div>
		</div>
	<?php
	include 'Includes/footer.php';
	?>
	

	
	
	</body>
	</html>
<?php }?>