<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['reject_seller'])){
        
        $reject_seller = $_GET['reject_seller'];
        
        $delete_s = "delete from sellers where seller_id='$reject_seller'";
        
        $run_delete = mysqli_query($con,$delete_s);
        
        if($run_delete){
            
            echo "<script>alert('Seller has been rejected')</script>";
            
            echo "<script>window.open('index.php?view_sellers','_self')</script>";
            
        }
        
    }

?>

<?php } ?>