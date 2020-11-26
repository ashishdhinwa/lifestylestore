<!DOCTYPE html>
<html lang="en">
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
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body style="padding-top: 50px;">
        <!-- Header -->
   <?php
    include 'Includes/header.php';
	?>
        <!--Header end-->
   
     
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
			
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="items/6.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="items/18.jpg" alt="">
                                <div class="caption">
								<center>
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </center>
								</div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="items/22.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>

        <!--Footer-->
     <?php
    include 'Includes/footer.php';
	?>
        <!--Footer end-->

    </body> 
</html>