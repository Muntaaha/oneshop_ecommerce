<?php 
    
    if(!isset($_SESSION['seller_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        $s_email = $_SESSION['seller_email'];
?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Orders
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Customer Name: </th>
                                <th> Customer Address: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Payment Status: </th>
                                <th> Order Date: </th>
                                <th> Delivery Date: </th>
                                <th> Total Amount: </th>
                                <th> Delivery Status: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_orders = "select * from customer_orders";
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){
                                    
                                    $order_id = $row_order['order_id'];
                                    
                                    $c_id = $row_order['customer_id'];
                                    
                                    $invoice_no = $row_order['invoice_no'];

                                    $get_status = "select * from payments where invoice_no='$invoice_no'";
                                    
                                    $run_status = mysqli_query($con,$get_status);
                                    
                                    $row_status = mysqli_fetch_array($run_status);
                                    
                                    $payment_status = $row_status['payment_status'];

                                    $delivery_status = $row_status['delivery_status'];
                                    
                                    $product_id = $row_order['product_id'];
                                    
                                    $qty = $row_order['qty'];
                                    
                                    $size = $row_order['size'];
                                    
                                    $order_status = $row_order['order_status'];
                                    
                                    $get_products = "select * from products where product_id='$product_id'";
                                    
                                    $run_products = mysqli_query($con,$get_products);
                                    
                                    $row_products = mysqli_fetch_array($run_products);
                                    
                                    $product_title = $row_products['product_title'];

                                    $seller_id = $row_products['seller'];

                                    $get_seller = "select * from sellers where seller_id='$seller_id'";
                                    
                                    $run_seller = mysqli_query($con,$get_seller);
                                    
                                    $row_seller = mysqli_fetch_array($run_seller);
                                    
                                    $seller_email = $row_seller['seller_email'];
                                    
                                    $get_customer = "select * from customers where customer_id='$c_id'";
                                    
                                    $run_customer = mysqli_query($con,$get_customer);
                                    
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    
                                    $customer_email = $row_customer['customer_email'];

                                    $customer_name = $row_customer['customer_name'];

                                    $customer_address = $row_customer['customer_address'];
                                    
                                    $get_c_order = "select * from customer_orders where order_id='$order_id'";
                                    
                                    $run_c_order = mysqli_query($con,$get_c_order);
                                    
                                    $row_c_order = mysqli_fetch_array($run_c_order);
                                    
                                    $order_date = $row_c_order['order_date'];
                                    
                                    $order_amount = $row_c_order['due_amount'];

                                    $i++;
                            if($s_email == $seller_email){
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_name; ?> </td>
                                <td> <?php echo $customer_address; ?> </td>
                                <td> <?php echo $invoice_no; ?></td>
                                <td> <?php echo $product_title; ?> </td>
                                <td> <?php echo $qty; ?></td>
                                <td> <?php 
                                    
                                        if($payment_status=='0'){
                                            
                                            echo 'Pending';
                                            
                                        }else{
                                            
                                            echo 'Complete';
                                            
                                        }
                                    
                                    ?> 
                                </td>
                                <td> <?php echo $order_date; ?> </td>
                                <td> <?php echo date('Y-m-d', strtotime($order_date. ' + 10 days')); ?> </td>
                                <td> <?php echo $order_amount; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        if($delivery_status=='0'){
                                            
                                            echo 'Pending';
                                            
                                        }else{
                                            
                                            echo 'Complete';
                                            
                                        }
                                    
                                    ?>
                                    
                                </td>
                                <td> 
                                     
                                     <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php 
                        } 
                    } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>