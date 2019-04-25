<?php
include "db.php";
session_start();
// if someone's session is already started
if (isset($_SESSION["uid"])) {
    header("Location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SpaceDiver mobile dealer</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/jquery2.js"></script>
        <script src="main.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/menu.css" rel="stylesheet">
    </head>
	<style>
	#laba{height:300px;
	        width:350px;
			margin-left:2px;
			border:solid black 1px;
			box-shadow:2em.2em.3em.3em #BBBBBB;
			margin-top:-300px;
			margin-bottom:70px;}
			</style>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="product_images/header.PNG" width="100" height="35" style="margin-top:-5px; border-radius:3px;"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" style="top:15">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="about_us.php"><span class="glyphicon glyphicon-comment"></span> About Us</a></li>
                        <li><a href="contact_us.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                        <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></ul>
                            <!-- coding for the drop down using the jquery 2.2.2 -->
                            <ul class="dropdown-menu" style="width:400px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-3">SL.NO</div>
                                            <div class="col-md-3">Product Image</div>
                                            <div class="col-md-3">Product Name</div>
                                            <div class="col-md-3">Price in R.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 SpaceDiver mobile dealer.</p></div>
                            </ul>
                        </li>
						
	
                        
                        <form class="navbar-form navbar-right" action="profile.php">
                            
                            <div class="form-group">
                                <input type="email" name="username" required="required" class="form-control" placeholder="Enter email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" required="required" class="form-control" placeholder="Enter password" id="password">
                            </div>
                                <button name="submit" type="submit" class="btn btn-success" id="login">Login</button>
                        </form>

                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            
            
            
            <div class="row">
                <div class="col-md-4">

                    <div class="panel panel-default panel-list">
                        <div class="panel-heading panel-heading-dark">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-search"> Search</span></h3>
                        </div>

                        <ul class="list-group">
                            <li style="list-style-type:none; margin-top:5px; margin-left:5px;"><input type="text" class="form-control" id="search"></li>
                            <li style="list-style-type:none; margin: 5px 10px 5px 120px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
                        </ul>
                    </div>

                    <div id="get_category"></div>

                    <div id="get_brand"></div>
                  
				   <h1><video width="350" "height="500"  Controls>
				   <source src="testphone.mp4" type="video/mp4">
				   
				   Your Browser does not support the video tag
				   </video>
				   <h1>on promotion</h1>
				   <h4>The mobile phone is the most used device to participate in online promotions 
				   and sweepstakes. The Smartphone already outperformed the computer as an Internet gateway in 2016 and a recent study that
				   Easypromos has developed, shows that it is also the most used device to participate in contests and sweepstakes on Facebook.</h4>
                   
                </div>

                <div class="col-md-8">
                    
                    <!-- image carousel section -->
                    <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                            <li data-target="#mycarousel" data-slide-to="3"></li>
                            <li data-target="#mycarousel" data-slide-to="4"></li>
                            <li data-target="#mycarousel" data-slide-to="5"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="wbigger1.jpg" >
                                <div class="carousel-caption">
                                    <h3>Samsang : The mystery begins.J7</h3>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="wbigger2.jpg">
                                <div class="carousel-caption">
                                    <h3>Apple: The Adventure of i7+.</h3>
                                </div>
                                
                            </div>
                            
                            <div class="item">
                                <img src="wbigger3.jpg">
                                
                                <div class="carousel-caption">
                                    <h3>Samsang: Only the strong Bold J7.</h3>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="wbigger4.jpg">
                                <div class="carousel-caption">
                                    <h3>Call of Duty: introducing notepad.</h3>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="wbigger6.jpg">
                                <div class="carousel-caption">
                                    <h3>Acessories:Games and many more.</h3>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="wbigger5.jpg">
                                <div class="carousel-caption">
                                    <h3>Top seller:huawei,the wnner of 2017.</h3>
                                </div>
                            </div>
                            
                        </div>
                        
                        <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        
                    </div>
                    
                    <p><br></p>
                    <!--End of image carousel section -->
                    

                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-green">
                            <h3 class="panel-title">Latest Releases</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div id="get_product"></div>
                               

                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end of the row -->
			 
			 
				  
        </div><!-- /.container -->
		
		

        <div class="row footer">
            <div class="container">
                <p><a href="index.php">SpaceDiver mobile dealer</a> &copy; Copyright 2017. All Rights Reserved.</p>
				<p><a href="manager1.php">Manager account</a></p>
            </div>
        </div>

    </body>
</html>