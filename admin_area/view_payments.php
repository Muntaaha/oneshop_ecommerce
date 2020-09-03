<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

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
                                <th> Invoice No: </th>
                                <th> Amount Paid: </th>
                                <th> Method: </th>
                                <th> Reference/Card Holder Name/ Delivery Address: </th>
                                <th> Phone/Card Number: </th>
                                <th> Payment Date: </th>
                                <th> Payment Status: </th>
                                <th> Delivery Status: </th>
                                <th> Confirm Payment: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_payments = "select * from payments";
                                
                                $run_payments = mysqli_query($con,$get_payments);
          
                                while($row_payments=mysqli_fetch_array($run_payments)){
                                    
                                    $payment_id = $row_payments['payment_id'];
                                    
                                    $invoice_no = $row_payments['invoice_no'];
                                    
                                    $amount = $row_payments['amount'];
                                    
                                    $payment_mode = $row_payments['payment_mode'];
                                    
                                    $ref_no = $row_payments['ref_cvv'];
                                    
                                    $phone_card_number = $row_payments['phone_card_number'];
                                    
                                    $payment_date = $row_payments['payment_date'];

                                    $payment_status = $row_payments['payment_status'];

                                    $delivery_status = $row_payments['delivery_status'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $amount; ?></td>
                                <td> <?php echo $payment_mode; ?> </td>
                                <td> <?php echo $ref_no; ?></td>
                                <td> <?php echo $phone_card_number; ?> </td>
                                <td> <?php echo $payment_date; ?> </td>
                                <td> <?php if($payment_status=="0"){
                                                echo "Pending";
                                            }
                                            else{
                                                echo "Paid";
                                            } 
                                     ?> 
                                </td>
                                <td> <?php if($delivery_status=="0"){
                                                echo "Pending";
                                            }
                                            else{
                                                echo "Delivered";
                                            } 
                                     ?> 
                                </td>
                                <?php if($payment_status=="1"){ ?>
                                    <td><i class="fa fa-check"></i><?php echo "Paid"; ?></td>
                                <?php
                                }
                                else{ ?>
                                <td>
                                     
                                     <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
                                     
                                        <i class="fa fa-check"></i> Payment Confirmed
                                    
                                     </a> 
                                     
                                </td>
                            <?php } ?>
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