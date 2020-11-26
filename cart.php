<?php
require "Includes/common.php";
if(!isset($_SESSION['email_of_user']))
	header('location:index.php');
    
$user_id=$_SESSION['user_id'];
$query="SELECT * FROM users_items INNER JOIN users ON users.id=users_items.user_id WHERE users.id='$user_id'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$sum=0;
$item_no=1;
?>
<!DOCTYPE html>
<html>
    <head>
	     
        <title>Lifestyle Store</title>
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
        <link rel="stylesheet" type="text/css" href="css/cart.css">
    </head>
    <body>
<?php
	include 'Includes/header.php';
	?>
				
				<div class="container">
				   <div class="row" style="margin-top:15%;">
				      <div class="col-xs-6 col-xs-offset-3">
					  <div class="table-responsive">
					     <table class="table table-striped table-hover ">
						 <tbody>
						  <tr>
					        <th>Item Number</th>
							<th>Item Name</th>
							<th>Price</th>
							<th></th>
						  </tr>
						  <?php 
						  if(mysqli_num_rows($query_result)==0)
						  {
	                      ?>
						  <h2 style="color:green;margin-bottom:20px;margin-left:150px;">Sorry, no items found</h2>
						  <h2 style="color:green;margin-bottom:20px;margin-left:0px;"><a href="products.php" class="btn btn-primary btn-block"><?php echo "Add now";?></a></h2><br/>
						  
						  <?php }
	                      else
                             {
	                         

						     while($row=mysqli_fetch_array($query_result)){
							$fetch_items_price="SELECT price,name FROM items where pid={$row['item_id']}";
		                    $run_query=mysqli_query($con,$fetch_items_price) or die(mysqli_error($con));
							$row_=mysqli_fetch_array($run_query);
							$item_id=$row['item_id'];
							?>
						  <tr>
						  <td><?php echo "$item_no" ;
                           $item_no=$item_no+1;
						  ?></td>
						    <td>
							<p style="color:green;"><?php echo " {$row_['name']} ";?></p>
			                   </td>
							   <td><a href="cart_remove.php?_id=<?php echo"$item_id";?>" style="color:blue;">Remove item
							   <!--To use php variables inside double quotes we must use {} -->
		                       </a>
							   </td>
		                     <?php $sum+=$row_['price'];
							}?>
                              <?php }?>
	     				  </tr>
						  <tr>
						     <td></td>
							 <td>Total</td>
							 <td>Rs <?php echo"$sum";?>/- </td>
							 <td><a href="success.php"><button type="submit" class="btn btn-primary btn-block">Confirm Order</button></a></td>
						    
						</tr>
						 </tbody>
						 </table>
					  </div>
					  </div>
				   </div>
				</div>
				
				<?php
	include 'Includes/footer.php';
	?>
	
			
</body>
</html>