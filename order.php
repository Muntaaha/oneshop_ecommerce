<?php 

include("includes/db.php");
include("functions/functions.php");

?>
<?php 

if(isset($_GET['c_id'])){
	
	$total_amount = '0';
    
    $customer_id = $_GET['c_id'];
	
	$select_customer = "select * from customers where customer_id='$customer_id'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_email = $row_customer['customer_email'];
	
	$customer_phone = $row_customer['customer_contact'];
	
	$customer_address = $row_customer['customer_address'];
	
	$scart = "select * from cart where customer='$customer_email'";

	$rcart = mysqli_query($con,$scart);

	while($rowcart = mysqli_fetch_array($rcart)){
		
		$p_id = $rowcart['p_id'];
		
		$pro_qty = $rowcart['qty'];
		
		$gproducts = "select * from products where product_id='$p_id'";
		
		$rproducts = mysqli_query($con,$gproducts);
		
		while($rowproducts = mysqli_fetch_array($rproducts)){
			
			$stotal = $rowproducts['product_price']*$pro_qty;
			
			$total_amount = $total_amount + $stotal;
		}
	}
}
if(isset($_POST['submit'])){


//$ip_add = getRealIpUser();

$status = "Cash On Delivery";

$invoice_no = mt_rand();

$select_cart = "select * from cart where customer='$customer_email'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    
    $pro_qty = $row_cart['qty'];
    
    $pro_size = $row_cart['size'];
    
    $get_products = "select * from products where product_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total = $row_products['product_price']*$pro_qty;
		
		//$total_amount = $total_amount + $sub_total;
		
		$seller_id = $row_products['seller'];
        
        $insert_customer_order = "insert into customer_orders (customer_id,seller_id,product_id,due_amount,invoice_no,qty,size,order_date,order_status,customer_name,customer_phone,customer_address,	total_amount) values ('$customer_id','$seller_id','$pro_id','$sub_total','$invoice_no','$pro_qty','$pro_size',NOW(),'$status','$_POST[c_name]','$_POST[c_phone]','$_POST[c_address]','$total_amount')";
        
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        
        $insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,qty,size,order_status) values ('$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status')";
        
        $run_pending_order = mysqli_query($con,$insert_pending_order);
        
        $delete_cart = "delete from cart where customer='$customer_email'";
        
        $run_delete = mysqli_query($con,$delete_cart);
        
        echo "<script>alert('Your orders has been submitted, Thanks')</script>";
        
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }
    
}
$insert_payment = "insert into payments(c_id,invoice_no,amount,payment_mode,phone_card_number,ref_cvv,payment_date) values('$customer_id','$invoice_no','$total_amount','Cash on Delivery','$_POST[c_phone]','$_POST[c_address]',NOW())";
  
  $run_insert_payment = mysqli_query($con,$insert_payment);
}
?>
<?php 

session_start();

if(isset($_SESSION['customer_email'])){
	
	$customer_email = $_SESSION['customer_email'];
	$get_customers = "select * from customers where customer_email ='$customer_email'";
    
    $run_customers = mysqli_query($con,$get_customers);
    
    $row_customers = mysqli_fetch_array($run_customers);
	
	$customer_name = $row_customers['customer_name'];
}


?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Shop Customer</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
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
               <a href="../checkout.php"> <?php if(isset($_SESSION['customer_email'])){
												items();
												}else{
													echo "0";
												}
				
			   ?> Items In Your Cart | Total Price: <?php if(isset($_SESSION['customer_email'])){
												total_price();
												}else{
													echo "0";
												}
				
			   ?> </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="my_account.php?my_orders">My Account</a>
                   </li>
                   <li>
                       <a href="../cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                       
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
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   
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
                       
                       <li>
                           <a href="../index.php">Home</a>
                       </li>
                       <li>
                           <a href="../shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="my_account.php?my_orders">My Account</a>
                       </li>
                       <li>
                           <a href="../cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="../contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php if(isset($_SESSION['customer_email'])){
												items();
												}else{
													echo "0";
												}
				
			   ?> Items In Your Cart</span>
                   
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
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   <center><h2>Customer Details</h2></center></hr>
                   <form method="post" enctype="multipart/form-data"><!-- form Begin -->
						<div class="form-group"><!-- form-group Begin -->
                               
                            <label>Customer Name</label>
                               
                            <input type="text" value= "<?php echo $customer_name; ?>" class="form-control" name="c_name" required>
                               
                        </div><!-- form-group Finish -->
						<div class="form-group"><!-- form-group Begin -->
                               
                            <label>Customer Phone</label>
                               
                            <input type="text" value= "<?php echo $customer_phone; ?>" class="form-control" name="c_phone" required>
                               
                        </div><!-- form-group Finish -->
						<div class="form-group"><!-- form-group Begin -->
                               
                            <label>Customer Address</label>
                               
                            <input type="text" value= "<?php echo $customer_address; ?>" class="form-control" name="c_address" required>
                               
                        </div><!-- form-group Finish -->
						<div class="form-group"><!-- form-group Begin -->
                               
                            <label>Total Amount</label>
                               
                            <input type="text" value= "<?php echo $total_amount; ?>" class="form-control" name="amount" disabled>
                               
                        </div><!-- form-group Finish -->
						<hr>
						<div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Submit
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
				   </form>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>