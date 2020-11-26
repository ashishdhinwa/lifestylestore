
<?php
require "Includes/common.php";
include 'Includes/check_if_added.php';//INCLUDE IS SAME LIKE INLINE STATEMENT.I.e. whole code of the included file geys written here
if(!empty($_SESSION['noitemmsg']))
{
	?>
	<script>
    alert("<?php echo "Please add items to the cart first";?>");
    </script>
	<?php
	  unset($_SESSION['noitemmsg']);
 }?>

<!DOCTYPE html>
<html>
    <head>
	     
        <title>Store</title>
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
        <link rel="stylesheet" type="text/css" href="css/products.css">
  
          
    </head>
	<body>
<?php
include 'Includes/header.php';
	?>
	
	<br><br><br>
	<div class="container">
	<div class="container1">
	  <div class="jumbotron">
	  <h2 style="font-size:35px;"><strong>Welcome to our Lifestyle Store!</strong></h2>
	  <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place</p>
	  </div>
	  </div>
	</div>
	
	
	<div class="container">
	   <div class="row" style="margin-right:11%;">
	      
		   <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/redd.jpeg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Arihant Collection<br>Blue Shirts
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹600</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(1))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=1"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		  
		  
		  
		     <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/linnen.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Linen White
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹800</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(2))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=2"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		  
		  
		  
		     <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/3_combo.jpg""></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>3-Shirts Combo
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹<del>2,500</del>&nbsp;1,200</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(3))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=3"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		  
		  
		   
		     <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/white_strip.jpg"></img>
		  <div class="caption">
		  <br>
		  <h5 style="margin-top:-3px;"><center><strong>White Strip Shirt
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,999</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(4))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=4"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		  
		  
		  

		  

	   </div>
	   <hr></hr>
	   
	     <div class="row" style="margin-right:11%;">
	      <div class="col-md-3 col-sm-6">
		      <div class="thumbnail">
			 <img src="watches/Braun_deezen.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Braun Deezen Watch
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹599</center></h5
		     <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(5))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=5"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 	 
		 </div>
		 </div>
		  </div>
		 		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="watches/tcruezwatch.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Cruez Watch
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹11,600</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(6))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=6"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   
		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="watches/Rolex.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Rolex Watch
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,11,600</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(7))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=7"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
    	  <div class="col-md-3 col-sm-6">
		   <div class="thumbnail">
		  <img src="watches/coachwatch.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Coach Watch
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹6,000</center></h5>
		   <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(8))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=8"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
	   </div>
	   </div>
	    <hr></hr>
		
		  <div class="row" style="margin-right:11%;">
	      <div class="col-md-3 col-sm-6">
		     <div class="thumbnail">
			<img src="cameras/cp-plus-ip-camera.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>CP Plus Camera
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹5,999</center></h5>
		   <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(9))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=9"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		  </div>
		  <div class="col-md-3 col-sm-6">
		     <div class="thumbnail">
			<img src="cameras/digital_camera_nikon.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Nikon Exclusive
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹11,600</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(10))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=10"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		  </div>
		  <div class="col-md-3 col-sm-6">
		     <div class="thumbnail">
			<img src="cameras/gsmarena.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>GSM Camera
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹26,000</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(11))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=11"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		  </div>
		  <div class="col-md-3 col-sm-6">
		      <div class="thumbnail">
			 <img src="cameras/Hikvision-Hd-Cctv-Cameras.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Hiki CCTV Camera
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹16,000</center></h5>
		   <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(12))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=12"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div></div>
	   </div>
	   <hr>
	 
	
	
	
	    
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="row" style="margin-right:11%;">
	      <div class="col-md-3 col-sm-6">
		      <div class="thumbnail">
			 <img src="shirts/1.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Louis Philippe Shirt
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹12,000</center></h5
		     <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(13))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=13"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 	 
		 </div>
		 </div>
		  </div>
		 		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/2.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Van Heusen
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1800</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(14))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=14"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   
		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/3.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Allen Solly
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,699</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(15))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=15"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
    	  
		  
		  		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/4.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Raymonds Shirts
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹2,800</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(16))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=16"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
           </div>
		   <hr>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   <div class="row" style="margin-right:11%;">
	      <div class="col-md-3 col-sm-6">
		      <div class="thumbnail">
			 <img src="shirts/5.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>John Players
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹2,199</center></h5
		     <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(17))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=17"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 	 
		 </div>
		 </div>
		  </div>
		 		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail" >
		 <img src="shirts/6.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Peter Enland(20% off)
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,199</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(18))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=18"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   
		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="watches/1.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Apache Pine watch
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹512</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(19))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=19"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
    	  
		  
		  		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="watches/2.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Andreas Strehler
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,699</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(20))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=20"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   </div>
		   <hr/>
		   
		   
		   
		   
		   
		    <div class="row" style="margin-right:11%;">
	      <div class="col-md-3 col-sm-6">
		      <div class="thumbnail">
			 <img src="watches/3.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Baume et Mercier
		    </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹2,800</center></h5
		     <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(21))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=21"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 	 
		 </div>
		 </div>
		  </div>
		 		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail" >
		 <img src="watches/4.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Webb C. Ball Watch
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹3,800</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(22))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=22"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   
		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/7.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>BlackBerrys
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹1,099</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(23))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=23"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
    	  
		  
		  		  <div class="col-md-3 col-sm-6">
		  <div class="thumbnail">
		 <img src="shirts/8.jpg"></img>
		  <div class="caption">
		  <h5 style="margin-top:-5px;"><center><strong>Park Avenue
		  </strong></center></h5>
		  <h5 style="margin-top:-5px; margin-bottom:-5px;"><center>Price ₹899</center></h5>
		    <?php
		  if(!isset($_SESSION['email_of_user']))
		  {
			  ?>
			  <a href="login.php"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  else{  
		  if(check_if_added_to_cart(24))
		  {
			  ?>
			  <a href="login.php"><button style="margin-top:10px;margin-bottom:-10px;font-size:12px;"type="submit" class="btn btn-primary btn-block" disabled>Added To Cart</button>
		      </a>
			  <?php
		  }
		  else{
			
		  ?>
		  <a href="cart_add.php?id=24"><button class="btn btn-block btn-primary" style="font-size:12px;margin-top:12px;margin-bottom:-4px;">Add to cart</button></a>
		  <?php
		  }
		  }
		  ?>		 
		  </div>
		  </div>
		   </div>
		   
		   </div>
		   
		   <hr>
		   
    	  </div>
	   </div>
	 
	  
	
	  
	
	
	
	
	<?php
include 'Includes/footer.php';
	?>
	
	
	
</body>
</html>