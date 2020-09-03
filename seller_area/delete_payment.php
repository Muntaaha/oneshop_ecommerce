<?php 
    
    if(!isset($_SESSION['seller_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_payment'])){
        
        $delete_payment_id = $_GET['delete_payment'];
        
        $delete_payment = "update payments set payment_status = '1' where payment_id='$delete_payment_id'";

        $get_invoice_number = "select * from payments where payment_id='$delete_payment_id'";

        $run_invoice_number = mysqli_query($con, $get_invoice_number);

        $row_invoice_number = mysqli_fetch($run_invoice_number);

        $invoice_number = $row_invoice_number['invoice_no']

        $get_customer_order = "update customer_orders set order_status='complete' "; 
        
        $run_delete = mysqli_query($con,$delete_payment);
        
        if($run_delete){
            
            echo "<script>alert('Payment Confirmed')</script>";
            
            echo "<script>window.open('index.php?view_payments','_self')</script>";
            
        }
        
    }

?>




<?php } ?>