<center><!--  center Begin  -->
    
    <h1> My Orders </h1>
    
    <p class="lead"> Your orders on one place</p>
    
    <p class="text-muted">
        
        If you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>
        
    </p>
    
</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> NO: </th>
                <th> Due Amount: </th>
                <th> Invoice No: </th>
                <th> Payment Mode: </th>
                <th> Order Date:</th>
				<th> Delivery Date</th>
                <th> Payment Status </th>
                <th> Delivery Status </th>
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
           
           <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from payments where c_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['payment_id'];
                
                $amount = $row_orders['amount'];
                
                $invoice_no = $row_orders['invoice_no'];

                $payment_method = $row_orders['payment_mode'];
                
                $payment_date = substr($row_orders['payment_date'],0,11);
                
                $payment_status = $row_orders['payment_status'];

                $delivery_status = $row_orders['delivery_status'];
                
                $i++;
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> BDT<?php echo $amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $payment_method; ?> </td>
                <td> <?php echo $payment_date; ?> </td>
				<td> <?php echo date('Y-m-d', strtotime($payment_date. ' + 10 days')); ?> </td>
                <td> <?php if($payment_status=="0"){
                        echo "Pending";
                    }
                    else{
                        echo "Paid";
                    } 
                     ?> 
                </td>
                <td> <?php if($delivery_status=="0"){
                    ?><a href="my_account.php?confirm_delivery=<?php echo $order_id; ?>">Pending</a><?php
                    }
                    else{
                        echo "Delivered";
                    } 
                     ?> 
                </td>
                
            </tr><!--  tr Finish  -->
            
            <?php } ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->