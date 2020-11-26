<?php
require "Includes/common.php";
if(isset($_SESSION['email_of_user']))
{
	header('location:products.php');
}

?>


<!DOCTYPE html>
<html>
    <head>
	     
        <title>Login</title>
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
		 <link rel="stylesheet" type="text/css" href="css/login.css">
		 </head>
    <body>
	
	
	
<?php
	 include 'Includes/header.php';
	?>
				
				
				
				<div class="container">
				   <div class="row">
				       <div class="col-xs-6 col-xs-offset-4" style="margin-top:14%;">
					       <div class="panel panel-warning">
						      <div class="panel-heading">
							  <p><center><strong>Welcome To  Lifestyle Store !</strong></center></p>
							  </div>
							  <div class="panel-body">
							  <p>Login TO Make Purchase</p>
							  <form action="login_submit.php" method="post">
							  <div class="form-group">
							  <input type="email" class="form-control" name="email_of_user" placeholder="Type your mail">
							  </input>
							  </div>
							  <div class="form-group">
							  <input type="password" class="form-control" name="password_of_user" placeholder="Password">
							  </input>
							  </div>
							  <?php
							  
						
							  if(!empty($_SESSION['errorMsg'])){
							 ?>
						      <h5 style="color:red;">Invalid credientials</h5>	<?php

                                unset($_SESSION['errorMsg']);}?>
							  <button class="btn btn-primary" style="margin-bottom:10px;">Login</button>
							  </form>
							  <div class="panel-footer">
	                          <p>Don't Have An Account?<a href="signup.php">Register Here</a></p>
	                          </div>
							  </div>
						   </div>
					   </div>
				   </div>
				</div>
				
				<?php
	         include 'Includes/footer.php';
				?>
	
			
</body>
</html>