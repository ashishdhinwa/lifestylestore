<?php
function check_if_added_to_cart($item_id)
{
	$user_id=$_SESSION['user_id'];
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
	$query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'" or die(mysqli_error($con));
	$run_query=mysqli_query($con,$query) or die(mysqli_error($con));
	if( mysqli_num_rows($run_query)>= 1)
		return 1;
	else
		return 0;
}

?>