<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['approve_seller'])){
        
        $seller_id = $_GET['approve_seller'];
        
        $seller_s = "Update sellers set status = '1' where seller_id='$seller_id'";
        
        $run_seller_s = mysqli_query($con,$seller_s);
        
        if($run_seller_s){
            
            echo "<script>alert('Request has been Approved')</script>";
            
            echo "<script>window.open('index.php?view_sellers','_self')</script>";
            
        }
        
    }

?>

<?php } ?>