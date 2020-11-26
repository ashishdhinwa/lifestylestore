<?php
require "Includes/common.php";
if(isset($_SESSION['email_of_user']))
{
	//If user's session is in start then redirect him directly to products.php page
	header('location/products.php');
}//Validate the fields of the user using HTML5 validation techniques and then if correct send that to 'signip_script.php' page

?>
<!DOCTYPE html>
<head>
<title>Signup</title>
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
		<link href="css/signup.css" rel="stylesheet" type="text/css"/>
</head>
     
<body>
<?php
	 include 'Includes/header.php';
	?>

<div class="container1">
<div class="container">
<div class="row"><br><br><br><br>
   <div class="col-xs-4 col-xs-offset-4">
   <br><br><br>
     <h3>Sign Up</h3>
     <form method="post" action="signup_script.php" >
	 <div class="form-group">
	 <input type="text" class="form-control" name="name_of_user" placeholder="Name" required></input><!--'required' here wants that name field cannot be empty-->
	 </div>
	  <div class="form-group">
	 <input type="email" class="form-control" name="email_of_user" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></input>
	 </div>
	  <?php
							  
						
							  if(!empty($_SESSION['email_error'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['email_error'];?></h5>	<?php

                                unset($_SESSION['email_error']);}?>
	  <div class="form-group">
	 <input type="password" id="pass" class="form-control" name="password_of_user" placeholder="Password" required = "true" ></input>
	 </div>
	<?php
							  
						
							  if(!empty($_SESSION['length_error'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['length_error'];?></h5>	<?php

                                unset($_SESSION['length_error']);}?>
	  
	  <div class="form-group">
	 <input type="number" class="form-control" name="contact_of_user" placeholder="Contact" required = "true" ></input>
	 </div>
	  <div class="form-group">
	 <input type="text" class="form-control" name="city_of_user" placeholder="City" required = "true" ></input>
	 </div>
	  <div class="form-group">
	 <input type="text" class="form-control" name="address_of_user" placeholder="Address" required ></input>
	 </div>
	 <div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
	 </div>
	</form>
   </div>
  </div>
 </div>
</div>
<?php
	include 'Includes/footer.php';
	?>
	
</body>
</html>