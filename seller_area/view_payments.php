<?php 
    
    if(!isset($_SESSION['seller_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

        $seller_email = $_SESSION['seller_email'];

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Payments
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Payments
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Product Name: </th>
                                <th> Customer Name: </th>
                                <th> Ordered Quantity: </th>
                                <th> Total Price: </th>
                                <th> Seller Payment: </th>
                                <th> Admin Payment: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;

                                $get_seller = "select * from sellers where seller_email = '$seller_email'";

                                $run_seller = mysqli_query($con,$get_seller);

                                $row_seller = mysqli_fetch_array($run_seller);

                                $seller_id = $row_seller['seller_id'];
                            
                                $get_order_datails = "select * from customer_orders where seller_id='$seller_id'";
                                
                                $run_order_datails = mysqli_query($con,$get_order_datails);
          
                                while($row_order_datails=mysqli_fetch_array($run_order_datails)){
                                    
                                    $customer_id = $row_order_datails['customer_id'];
                                    
                                    $product_id = $row_order_datails['product_id'];
                                    
                                    $amount = $row_order_datails['due_amount'];
                                    
                                    $qty = $row_order_datails['qty'];
                                    
                                    $size = $row_order_datails['size'];
                                    
                                    $order_date = $row_order_datails['order_date'];

                                    $get_customer = "select * from customers where customer_id = '$customer_id'";

                                    $run_customer = mysqli_query($con,$get_customer);

                                    $row_customer=mysqli_fetch_array($run_customer);

                                    $customer_name = $row_customer['customer_name'];

                                    $get_product = "select * from products where product_id = '$product_id'";

                                    $run_product = mysqli_query($con,$get_product);

                                    $row_product=mysqli_fetch_array($run_product);

                                    $product_name = $row_product['product_title'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $seller_id; ?> </td>
                                <td> <?php echo $product_name; ?> </td>
                                <td> <?php echo $customer_name; ?></td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $amount; ?></td>
                                <td> <?php echo $amount*(90/100); ?> </td>
                                <td> <?php echo $amount*(10/100); ?> </td>
                                
                            
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>