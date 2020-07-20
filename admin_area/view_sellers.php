<?php 
    
    // if(!isset($_SESSION['seller_email'])){
        
        // echo "<script>window.open('login.php','_self')</script>";
        
    // }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Costumers
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Sellers
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Name: </th>
                                <th> Image: </th>
                                <th> E-Mail: </th>
                                <th> Contact: </th>
                                <th> Company Name: </th>
                                <th> Business Type: </th>
							   <th> Total Earned by Admin(10%) </th>
							   <th> Total Earned (Seller)</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
								
								$total_payment= 0;
                                $get_c = "select * from sellers where status = '1'";
                                
                                $run_c = mysqli_query($con,$get_c);
          
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $c_id = $row_c['seller_id'];
                                    
                                    $c_name = $row_c['seller_name'];
                                    
                                    $c_img = $row_c['seller_image'];
                                    
                                    $c_email = $row_c['seller_email'];
                                    
                                    $c_contact = $row_c['seller_contact'];
                                    
                                    $company_name = $row_c['company_name'];

                                    $business_type = $row_c['business_type'];

                                    $i++;
                            
									$seller_payment = "select * from customer_orders where seller_id = '$c_id'";
									
									$run_seller_payment = mysqli_query($con,$seller_payment);
									
									while($row_payment=mysqli_fetch_array($run_seller_payment)){
										
										$payment = $row_payment['due_amount'];
										
										$total_payment += $payment;
										
									}
									
									$admin_payment = $total_payment * (10/100);
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                                <td> <img src="../seller_area/seller_images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $c_email; ?> </td>
                                <td> <?php echo $c_contact ?> </td>
                                <td> <?php echo $company_name ?> </td>
								<td> <?php echo $business_type ?> </td>
								<td> <?php echo $admin_payment ?> </td>
								<td> <?php echo $total_payment ?> </td>
                                <!--<td>Incomplete</td>-->
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

 <?php //} ?>