<?php 

    $active='Home';
    

?>
<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php 
if(isset($_SESSION['customer_email'])){

	$customer_email = $_SESSION['customer_email'];
	
	$get_customers = "select * from customers where customer_email ='$customer_email'";
    
    $run_customers = mysqli_query($con,$get_customers);
    
    $row_customers = mysqli_fetch_array($run_customers);
	
	$customer_name = $row_customers['customer_name'];
}

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>one shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
	<style>
	
	.btn {
		margin-bottom: 5px!important;
		font-size: 12px!important;
		
	}
	</style>
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $customer_name . "";
                       
                   }
                   
                   ?>
                   
               </a>
               <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Buyer Register</a>
                   </li>
				   <li>
                       <a href="seller_register.php">Seller Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="checkout.php">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                           
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/logo.png" alt="Logo" class="hidden-xs">
                   <img src="images/logo.png" alt="Logo" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index.php">Home</a>
                       </li>
					   <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                           
                       </li>
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active"; ?>">
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
      <div id="content"><!-- #content Begin -->
       <div class="container">
	   <center style="margin-bottom: 20px;"><h1><b>Our Shops</b></h1></center>
   <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=6; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                             
                            $get_sellers = "select * from sellers where status = '1' order by 1 DESC LIMIT $start_from,$per_page";
                             
                            $run_sellers = mysqli_query($con,$get_sellers);
                             
                            while($row_sellers=mysqli_fetch_array($run_sellers)){
                                
                                $seller_id = $row_sellers['seller_id'];
        
                                $company_name = $row_sellers['company_name'];

                                $business_desc = $row_sellers['business_desc'];

                                $business_image = $row_sellers['business_image'];
                                
                                echo "
                                
                                    <div class='col-md-3 col-sm-4 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='shop.php?seller_id=$seller_id'>
                                            
                                                <img class='img-responsive' src='seller_area/product_images/$business_image'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='shop.php?seller_id=$seller_id'> $company_name </a>
                                                
                                                </h3>
                                            
                                                <p>

                                                    $business_desc

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='shop.php?seller_id=$seller_id'>

                                                        Enter this Shop

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
						?>
               
               </div><!-- row Finish -->
                    <center>
                   <ul class="pagination"><!-- pagination Begin -->
					 <?php
                             
                    $query = "select * from sellers";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='shop.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        ";
                             
					    	}
							
						}
					 
					 ?> 
                       
                   </ul><!-- pagination Finish -->
               </center> 
                         </div><!-- container Finish -->
   </div><!-- #content Finish --> 
   <center style="margin-bottom: 20px;"><h1><b>Top Products</b></h1></center>
   <div class="container">
    <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=6; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            if(!isset($_GET['seller_id'])){
                            
							$get_products = "select * from products order by 1 ASC LIMIT 1,12";	
							}
                            $run_products = mysqli_query($con,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['product_id'];
        
                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];
                                
                                echo "
                                
                                    <div class='col-md-2 col-sm-6 center-responsive' style='margin-bottom: 30px;'>
                                    
                                        <div style='height: 400px'>
                                        
                                            <a href='details.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='seller_area/product_images/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h4 style='height: 40px;'>
                                                
                                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h4>
                                            
                                                <p class='price'>

                                                    $$pro_price

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-sm btn-warning' href='details.php?pro_id=$pro_id'>

                                                        View Details

                                                    </a>

                                                    <a class='btn btn-sm btn-primary' href='details.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> Add To Cart

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
                        
                   ?>
               
               </div><!-- row Finish -->
			   </div>
						 <?php 
						 }
						 }
?>
		<center style="margin-bottom: 20px; margin-top:100px;"><h1><b>Trending Products</b></h1></center>
<div class="container">
    <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=6; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            if(!isset($_GET['seller_id'])){
                            
							$get_products = "select * from products order by 1 DESC LIMIT 1,12";	
							}
                            $run_products = mysqli_query($con,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['product_id'];
        
                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];
                                
                                echo "
                                
                                    <div class='col-md-2 col-sm-6 center-responsive' style='margin-bottom: 30px;'>
                                    
                                        <div style='height: 400px'>
                                        
                                            <a href='details.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='seller_area/product_images/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h4 style='height: 40px;'>
                                                
                                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h4>
                                            
                                                <p class='price'>

                                                    $$pro_price

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                        View Details

                                                    </a>

                                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> Add To Cart

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
                        
                   ?>
               
               </div><!-- row Finish -->
			   </div>

   <?php 
    }
							
						}
					 ?>
					 
					 
	<center style="margin-bottom: 80px; margin-top:100px;"><h1><b>Blogs</b></h1></center>				 
	<div class="container">
    <div class="row"><!-- row Begin -->
               
	   <?php 
	   
		
				if(!isset($_GET['seller_id'])){
				//echo "HELLO1";
				$get_blog = "select * from blog";	# order by 1 DESC LIMIT 1,4
				
				}
				
				$run_blog = mysqli_query($con,$get_blog);
				 
				while($row_blog=mysqli_fetch_array($run_blog)){
					
					$id = $row_blog['id'];
					
					$title = $row_blog['title'];

					$description = $row_blog['description'];

					$image = $row_blog['image'];
					
					echo "
					
						<div class='col-md-6 col-sm-6 center-responsive' style='margin-bottom: 30px;'>
						
							<div class='product'>
							
								<a href='blog_details.php?id=$id'>
								
									<img class='img-responsive' src='admin_area/admin_images/$image'>
								
								</a>
								
								<div class='text'>
								
									<h4>
									
										<a href='blog_details.php?id=$id'> $title </a>
									
									</h4>

									<p class='buttons'>

										<a class='btn btn-default' href='blog_details.php?id=$id'>

											View Details

										</a>

									</p>
								
								</div>
							
							</div>
						
						</div>
					
					";
					
			}
			
	   ?>
               
               </div><!-- row Finish -->
			   </div>

    				 
	<?php 
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>