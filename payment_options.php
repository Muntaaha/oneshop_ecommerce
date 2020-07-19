<div class="box"><!-- box Begin -->
   
   <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    ?>
    
    <h1 class="text-center">Payment Options For You</h1>  
    
	<div style="margin-top: 50px;">
		<div class="box">
			<center><h2>Offline Payment Options</h2><hr></center>
			<div style="width: 180px; height: 50px; background-color:Tomato;  text-align: center;padding-top: 6px;"><h4><a style="color: #fff;" href="order.php?c_id=<?php echo $customer_id ?>">Cash On Delivery</a></h4></div>
		</div>
		<div class="box row">
		<center><h2>Online Payment Options</h2><hr></center>
			<div class="col-md-4">
				<div style="width: 150px; height: 50px; background-color:SlateBlue; color: #fff; text-align: center;padding-top: 6px;"><h4><a style="color: #fff;" href="bkaash_order.php?c_id=<?php echo $customer_id ?>">BKaash</a></h4></div>
			</div>
			<div class="col-md-4">
				<div style="width: 150px; height: 50px; background-color:Violet; color: #fff; text-align: center;padding-top: 6px;"><h4><a style="color: #fff;" href="card_payment.php?c_id=<?php echo $customer_id ?>">Debit/Credit Card</a></h4></div>
			</div>
		</div>
	
	</div>
</div><!-- box Finish -->