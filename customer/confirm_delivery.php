<?php 

    if(isset($_GET['confirm_delivery'])){
        
        $confirm_delivery = $_GET['confirm_delivery'];
        
        $try_confirm_delivery = "update payments set delivery_status = '1' where payment_id='$confirm_delivery'";
        
        $confirmed = mysqli_query($con,$try_confirm_delivery);
        
        if($confirmed){
            
            echo "<script>alert('Delivery Confirmed')</script>";
            
            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
            
        }
        
    }

?>

