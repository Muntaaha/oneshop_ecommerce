<?php 

    $active='Shop';
    include("includes/header.php");

?>
<style>
  .btn {
    margin-bottom: 5px!important;
    font-size: 12px!important;
    
  }
  </style>
  <?php
	if(isset($_GET['seller_id'])){
		$seller_id = $_GET['seller_id'];
		
		$get_seller = "select * from sellers WHERE seller_id='$seller_id'";
                             
		$run_seller = mysqli_query($con,$get_seller);
		 
		while($row_seller=mysqli_fetch_array($run_seller)){
			$seller_name = $row_seller['seller_name'];
			$company_name = $row_seller['company_name'];
		}
	}
  else{
   $seller_name = " ";
   $company_name = " ";
  }
  
  ?>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
				          <li><?php echo $company_name ?></li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
             
             
               
               <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=8; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            if(isset($_GET['seller_id'])){
              								$seller_id = $_GET['seller_id'];
                              $get_products = "select * from products WHERE seller='$seller_id' order by 1 DESC "; #LIMIT $start_from,$per_page
                            ?>
                            <div class="box" style="height: 100px">
                              <h3>
                            <?php
                              $shop_name = "select company_name from sellers where seller_id='$seller_id'";
                              $get_shop_name = mysqli_query($con,$shop_name);
                              $row_shop_name = mysqli_fetch_array($get_shop_name);
                              $shop = $row_shop_name['company_name'];
                              echo $shop;
                            ?>

                          </h3>
                            </div>
                            <?php
                            }
                            else{
              							$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";	
              							}
                            $run_products = mysqli_query($con,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['product_id'];
        
                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];
                                
                                echo "
                                
                                    <div class='col-md-3 col-sm-6 center-responsive'>
                                    
                                        <div style='height: 400px'>
                                        
                                            <a href='details.php?pro_id=$pro_id'>
                                            
                                                <img class='img-responsive' src='seller_area/product_images/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h4 style='height: 30px;'>
                                                
                                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h4>
                                            
                                                <p class='price'>

                                                    BDT$pro_price

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                        View Details

                                                    </a>

                                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> Add To Cart

                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
                        
                   ?>
               
               </div><!-- row Finish -->
                <?php 
                if(!isset($_GET['seller_id'])){
                ?>
                <center>
                   <ul class="pagination"><!-- pagination Begin -->
					         <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='shop.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        ";
                             
					    	}
							
						}
					 
					 ?> 
                       
                   </ul><!-- pagination Finish -->
               </center>
          <?php 
            }
          ?>
                <?php 
               
               getpcatpro(); 
               
               getcatpro();
               
               ?>  
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>