<?php
include "Includes/common.php";
if(!isset($_SESSION['email_of_user']))
{
	?>
	<script>
	alert('Please login to make changes to your account');
    </script>
	<?php header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
	     
        <title>Change Password</title>
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
        <link href="css/new.css" rel="stylesheet" type="text/css"/>
	    <link href="css/settings.css" rel="stylesheet" type="text/css"/>
    </head>
	<body>
	<?php
 include 'Includes/header.php';
	?>
	
	<div class="container">
	 <div class="row"><br><br><br><br><br><br>
	 <div class="col-xs-4 col-xs-offset-4">
	 <h3 style="margin-bottom:15px;">Change Password</h3>
	     <?php  if(!empty($_SESSION['success_in_changing']))
		 {      ?><br/><br/><br/>
				<h3 style="color:green;margin-left30px;"><?php echo $_SESSION['success_in_changing'];?>!!</h3>
                <br/>
			 <a href="products.php"><button class="btn btn-primary">OK</button></a>		
		 <?php unset($_SESSION['success_in_changing']);}
			
		else{?>
	     <form method="post" action="settings_script.php">
	         <div class="form-group">
             <input type="password" name="old_password" class="form-control" placeholder="Old Password">
			 </input>
			 </div>		
	         <div class="form-group">
             <input type="password" name="new_password" class="form-control" placeholder="New Password">
			 </input>
			 </div>			 
	         <div class="form-group">
             <input type="password" name="retype_new_password" class="form-control" placeholder="Re-type New Password">
			 </input>
			 </div>			
             <div class="form-group">
			<?php
							  
						
							  if(!empty($_SESSION['error_Msg'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['error_Msg']?></h5>	<?php

                                unset($_SESSION['error_Msg']);}?>
			<?php
			if(!empty($_SESSION['error_Msg_two'])){
				?>
				<h5 style="color:red;"><?php echo $_SESSION['error_Msg_two'];?></h5>
				<?php
				  unset($_SESSION['error_Msg_two']);}?>
		

             <button type="submit" name="submit_button"  value="Submit" class="btn btn-primary ">Submit
			 </button>
			 </input>
			 </div>		 			 
	     </form>
		</div>
       </div>		
	</div>
	<?php
	include 'Includes/footer.php';
		}?>
	
	
	
	</body>
	</html>
	