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
                   <li>
                       Register
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
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Register a new account </h2>
						   <p>Before Registration know the rules</p>
						   <p>* You have to provide 10% of your total income every three months to the 'oneshop authority' to increase the platform.</p>

							<p>*Sharing of any spam content is strictly prohibited.</p>

							<p>*Do not spread any negativity. If the oneshop authority finds you offensive in any way, we may ban you from the platfrom if necessary.</p>
                           
                       </center><!-- center Finish -->
                       
                       <form action="seller_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Seller Name</label>
                               
                               <input type="text" class="form-control" name="seller_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Seller Email</label>
                               
                               <input type="text" class="form-control" name="seller_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Seller Password</label>
                               
                               <input type="password" class="form-control" name="seller_password" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Seller Location</label>
                               
                               <input type="text" class="form-control" name="seller_location" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Company Name</label>
                               
                               <input type="text" class="form-control" name="s_company_name">
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Business Type</label>
                               
                               <input type="text" class="form-control" name="business_type" required>
                               
                           </div>

                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Contact</label>
                               
                               <input type="text" class="form-control" name="seller_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="s_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
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


<?php 

if(isset($_POST['register'])){
    
    $seller_name = $_POST['seller_name'];
    
    $seller_email = $_POST['seller_email'];
    
    $seller_password = $_POST['seller_password'];
    
    $seller_location = $_POST['seller_location'];
    
    $s_company_name = $_POST['s_company_name'];
    
    $business_type = $_POST['business_type'];
    
    $seller_contact = $_POST['seller_contact'];
    
    $s_image = $_FILES['s_image']['name'];
    
    $s_image_tmp = $_FILES['s_image']['tmp_name'];
    
    $s_ip = getRealIpUser();
    
    move_uploaded_file($s_image_tmp,"seller_area/seller_images/$s_image");
    
    $insert_customer = "insert into sellers (seller_name,seller_email,seller_password,seller_location,seller_contact,business_type,company_name,seller_ip,seller_image) values ('$seller_name','$seller_email','$seller_password','$seller_location','$seller_contact','$business_type','$s_company_name','$s_ip','$s_imag')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    
    if($run_customer){
                  
                  echo "<script>alert('New Seller has been registered')</script>";
                  
                  echo "<script>window.open('index.php','_self')</script>";
                  
              }
    
}

?>