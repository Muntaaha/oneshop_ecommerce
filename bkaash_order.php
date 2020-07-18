<?php 
	 $active='Account';
   include("includes/header.php");

?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
				   <li>Bkaash Payment</li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
        </div><!-- col-md-3 Finish -->
           
            <div class="col-md-9"><!-- col-md-9 Begin -->
             
				<center>
					<div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Bkaash Payment Details </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Phone Number</label>
                               
                               <input type="text" class="form-control" name="phone_number" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>PIN Number</label>
                               
                               <input type="text" class="form-control" name="pin" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Reference</label>
                               
                               <input type="text" class="form-control" name="reference" required>
                               
                           </div><!-- form-group Finish -->
						   
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Submit
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
				</center>
               
			</div><!-- col-md-9 Finish -->
           
        </div><!-- container Finish -->
   </div><!-- #content Finish -->
   <?php 

if(isset($_GET['c_id'])){
    
    $customer_id = $_GET['c_id'];
	
	$select_customer = "select * from customers where customer_id='$customer_id'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_email = $row_customer['customer_email'];
    
}
if(isset($_POST['submit'])){
	$ip_add = getRealIpUser();

	$status = "Paid By Bkaash";

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
			
			$insert_customer_order = "insert into customer_orders (customer_id,due_amount,invoice_no,qty,size,order_date,order_status) values ('$customer_id','$sub_total','$invoice_no','$pro_qty','$pro_size',NOW(),'$status')";
			
			$run_customer_order = mysqli_query($con,$insert_customer_order);
			
			$insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,qty,size,order_status) values ('$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status')";
			
			$run_pending_order = mysqli_query($con,$insert_pending_order);
			
			$delete_cart = "delete from cart where customer='$customer_email'";
			
			$run_delete = mysqli_query($con,$delete_cart);
			
			echo "<script>alert('Your orders has been submitted, Thanks')</script>";
			
			echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
			
		}
		
	}
}
?>
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>