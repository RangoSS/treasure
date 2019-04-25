<?php
session_start();
// redirect user to the index page when they try to load profile page without login
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SpaceDiver</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/jquery2.js"></script>
        <script src="main.js"></script>
        <script src="js/bootstrap.js"></script>

    </head>

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
                    <a class="navbar-brand" href="index.php"><img src="product_images/header.jpg" width="100" height="35" style="margin-top:-5px; border-radius:3px;"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>


                        <li><a href="#" id ="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
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
                                    <div class="panel-body">
                                        <div id="cart_product">
                                            <!--<div class="row">
                                                <div class="col-md-3">SL.NO</div>
                                                <div class="col-md-3">Product Image</div>
                                                <div class="col-md-3">Product Name</div>
                                                <div class="col-md-3">Price in R.</div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 The Gaming Place.</p></div>
                            </ul>
                        </li>

                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi, " . $_SESSION["name"]; ?></a>
                            <ul class="dropdown-menu" style="width:300px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <li><a href="cart.php" style="text-decoration: none; color: blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" style="text-decoration: none; color: blue;">Change Password</a></li>
                                        <li class="divider"></li>
                                        <li><a href="logout.php" style="text-decoration: none; color: blue;">Logout</a></li>
                                    </div>
                                </div>
                                <div class="panel-footer"><p style="text-align: center;">&copy; 2107 The Gaming Place.</p></div>
                            </ul>
                        </li>

                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <style>
            table {
                  border-collapse: collapse;
                   border-spacing: 0;
                    border:10px;
                    color:black;
					}
				td,th{border:solid black 1px;}
              th{background-color:#800000;}	
			  
			   article{width:90%;margin-left:3px;box-shadow:2em.2em.3em.3em #BBBBBB;
          margin-top:200px;}
        </style>
       
         
        
           
        <?php
         ////get and assign hostname 
       $dsn ='mysql:host=localhost;dbname=thegame';
       $username='root';
       $password='';
       $db = new PDO($dsn,$username,$password);
      
      
        ?>
        <?php
          //choose data you want to select   THIS IS THE DATA FROM USER ACCOUNT
         $query= 'SELECT *
             FROM user_info';
         $user_info = $db->query($query);
         $user_info = $user_info->fetchAll();
          
          
		  
		   $query= 'SELECT *
             FROM Cart';
         $cart = $db->query($query);
         $cart = $cart->fetchAll();
		 
		 

		 
        ?>
    <article>
	<center><h1> users information</h1></center>
                <table border="1">     
             
              <tr>
                <td><strong>User ID</strong></td>
                <td><strong>first Name</strong></td>
                <td><strong>Last Name</strong></td>
				<td><strong>Email</strong></td>
                <td><strong>Password</strong></td>
                <td><strong>Address 1</strong></td>
                <td><strong>Address 2</strong></td>
				<td><strong>OPTION</strong></td>
				
              </tr>
                  
                
                
            
        
            <?php foreach ($user_info as $user_infos):?>
            
            <tr>
            <td><?php echo $user_infos['user_id'];?></td>
            <td><?php echo $user_infos['first_name'];?></td>
            <td><?php echo $user_infos['last_name'];?></td>
            <td><?php echo $user_infos['email'];?></td>
			 <td><?php echo $user_infos['password'];?></td>
            <td><?php echo $user_infos['address1'];?></td>
            <td><?php echo $user_infos['address2'];?></td>
            <td><a href=\"edit.php?id=$user_infos[id]\">Edit</a> | <a href=\"delete.php?id=$user_infos[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
             </tr>
        
            </tr>
                 
           <?php endforeach;?>
            </table>
			<br></br>
			
			<center><h1> product ready to be purchased</h1></center>
			<!-- table cart-->
			<table id="cat">
			 <tr>
                <td><strong>Cart ID</strong></td>
                <td><strong>Product ID</strong></td>
                <td><strong>IP address</strong></td>
				<td><strong>User ID</strong></td>
                <td><strong>Product Title</strong></td>
                <td><strong>Product Image</strong></td>
                <td><strong>Quantity</strong></td>
				<td><strong>Price</strong></td>
                <td><strong>Total Amount</strong></td>
				<td><strong>OPTION</strong></td>
				
              </tr>
                  
                
                
            
        
            <?php foreach ($cart as $carts):?>
            
            <tr>
            <td><?php echo $carts['id'];?></td>
            <td><?php echo $carts['p_id'];?></td>
            <td><?php echo $carts['ip_add'];?></td>
            <td><?php echo $carts['user_id'];?></td>
			<td><?php echo$carts['product_title'];?></td>
            <td><?php echo $carts['product_image'];?></td>
            <td><?php echo $carts['qty'];?></td>
			<td><?php echo $carts['price'];?></td>
            <td><?php echo $carts['total_amount'];?></td>
           <td><a href=\"edit.php?id=$carts[id]\">Edit</a> | <a href=\"delete.php?id=$carts[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
             </tr>
        
            </tr>
                 
           <?php endforeach;?>
            </table>
			
         </article>   
  </body>
</html>

