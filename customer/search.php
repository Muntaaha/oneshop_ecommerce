<?php 

    $active='Shop';
    include("includes/header.php");

?>
 <div class="container"><!-- container Begin -->
 	<div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
<?php 
if(isset($_POST['submit-search'])){
	$search = mysqli_real_escape_string($con,$_POST['search']);
	// $sql = "select * from products where product_title LIKE '%f%'";
	$sql = "select products.product_id, products.product_title, products.product_price, products.product_img1, sellers.company_name from products LEFT JOIN sellers on products.seller = sellers.seller_id where product_title LIKE '%$search%' or company_name LIKE '%$search%'";
	$result = mysqli_query($con,$sql);
	$queryResult = mysqli_num_rows($result);

	if($queryResult > 0){
		echo "<div style='font-size: 32px; background-color: #fff;padding: 20px; margin-bottom: 20px;'>There are total $queryResult Products Found</div>";
		while($row = mysqli_fetch_assoc($result)){
		$pro_id = $row['product_id'];
        
        $pro_title = $row['product_title'];

		$company_name = $row['company_name'];

        $pro_price = $row['product_price'];

        $pro_img1 = $row['product_img1'];
		echo "
			<div class='col-md-3 col-sm-4 center-responsive' style='margin-bottom: 30px;'>
                                    
                <div style='height: 500px'>
                
                    <a href='details.php?pro_id=$pro_id'>
                    
                        <img class='img-responsive' src='seller_area/product_images/$pro_img1'>
                    
                    </a>
                    
                    <div class='text'>
                    
                        <h4 style='height: 40px;'>
                        
                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                        
                        </h4>
                        
                        <h4>
                          <a href='details.php?pro_id'>$company_name</a>
                        </h4>
                    
                        <p class='price'>

                            BDT $pro_price

                        </p>

                        <p class='buttons'>

                            <a class='btn btn-sm btn-warning' href='details.php?pro_id=$pro_id'>

                                View Details

                            </a>

                            <a class='btn btn-sm btn-primary' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                            </a>

                        </p>
                    
                    </div>
                
                </div>
            
            </div>
		";			
			
		}
	}
		
	else{
		echo "<div style='font-size: 32px; background-color: #fff;padding: 20px; margin-bottom: 20px;'>No Products Found</div>";
	}
}


?>
</div>
</div>
	<?php 
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
<style>
	
	.btn {
		margin-bottom: 5px!important;
		font-size: 12px!important;
		
	}
	</style>
</html>