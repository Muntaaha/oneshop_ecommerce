<?php 
    
    //if(!isset($_SESSION['seller_email'])){
        
        //echo "<script>window.open('login.php','_self')</script>";
        
    //}else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Seller Request Approval
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Seller Requests
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Seller Name: </th>
                                <th> Seller Image: </th>
                                <th> Seller E-Mail: </th>
                                <th> Seller Contact: </th>
                                <th> Seller Location: </th>
								<th> Company Name: </th>
								<th> Business Type: </th>
								<th> Business Image: </th>
								<th> Business Description: </th>
								<th> Approve: </th>
								<th> Reject: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_s = "select * from sellers where status = '0'";
                                
                                $run_s = mysqli_query($con,$get_s);
          
                                while($row_s=mysqli_fetch_array($run_s)){
                                    
                                    $s_id = $row_s['seller_id'];
                                    
                                    $s_name = $row_s['seller_name'];
                                    
                                    $s_img = $row_s['seller_image'];
                                    
                                    $s_email = $row_s['seller_email'];
                                    
                                    $s_contact = $row_s['seller_contact'];
                                    
                                    $s_location = $row_s['seller_location'];
                                    
                                    $s_company_name = $row_s['company_name'];
                                    
                                    $s_business_type = $row_s['business_type'];
                                    
                                    $s_business_image = $row_s['business_image'];
                                    
                                    $s_business_desc = $row_s['business_desc'];
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $s_name; ?> </td>
                                <td> <img src="../seller/seller_images/<?php echo $s_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $s_email; ?> </td>
                                <td> <?php echo $s_contact ?> </td>
                                <td> <?php echo $s_location ?> </td>
                                <td> <?php echo $s_company_name ?> </td>
                                <td> <?php echo $s_business_type ?> </td>
                                <td> <?php echo $s_business_image ?> </td>
                                <td> <?php echo $s_business_desc ?> </td>
								<td> 
                                    <a href="index.php?approve_seller=<?php echo $s_id; ?>"> Approve</a> 
                                </td>
								<td> 
                                    <a href="index.php?reject_seller=<?php echo $s_id; ?>">Reject</a> 
                                </td>
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