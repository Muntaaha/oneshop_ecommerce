<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <!-- <div class="panel-heading"> panel-heading Begin -->
        <!-- <h3 class="panel-title">Products Categories</h3> -->
    <!-- </div>panel-heading Finish --> 
    
    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
			
			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#apparelformen"><!-- a href begin -->
						
						Apparel for Men
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="apparelformen" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='5'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#apparelforwomen"><!-- a href begin -->
						
						Apparel for Women
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="apparelforwomen" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='6'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->	

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#MotherKids"><!-- a href begin -->
						
						Mother & Kids
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="MotherKids" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='17'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		
            
            <li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#NakshiKantha"><!-- a href begin -->
						
						Nakshi Kantha
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="NakshiKantha" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='12'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->



<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <!-- <div class="panel-heading"> panel-heading Begin -->
        <!-- <h3 class="panel-title">Products Categories</h3> -->
    <!-- </div>panel-heading Finish --> 
    
    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
			
			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#JewelryAccessories"><!-- a href begin -->
						
						Jewelry & Accessories
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="JewelryAccessories" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='11'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#BeautyHealth"><!-- a href begin -->
						
						Beauty & Health
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="BeautyHealth" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='13'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->	

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#LuggageBags"><!-- a href begin -->
						
						Luggage & Bags
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="LuggageBags" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='16'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		
            
            <li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#Shoe"><!-- a href begin -->
						
						Shoe
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="Shoe" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='15'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->




<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <!-- <div class="panel-heading"> panel-heading Begin -->
        <!-- <h3 class="panel-title">Products Categories</h3> -->
    <!-- </div>panel-heading Finish --> 
    
    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
			
			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#RawProducts"><!-- a href begin -->
						
						Raw Products
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="RawProducts" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='7'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#HomeGardening"><!-- a href begin -->
						
						Home & Gardening
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="HomeGardening" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='8'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->	

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#CraftMaterials"><!-- a href begin -->
						
						Craft Materials
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="CraftMaterials" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='10'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		
            
            <li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#Tools"><!-- a href begin -->
						
						Tools
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="Tools" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='9'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->	

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#CellphoneTelecommunication"><!-- a href begin -->
						
						Cellphone & Telecommunication
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="CellphoneTelecommunication" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='14'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->			
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->


<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <!-- <div class="panel-heading"> panel-heading Begin -->
        <!-- <h3 class="panel-title">Products Categories</h3> -->
    <!-- </div>panel-heading Finish --> 
    
    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
			
			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#FoodItem"><!-- a href begin -->
						
						Food Item
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="FoodItem" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='18'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->		

			<li><!-- li begin -->
				<a href="#" data-toggle="collapse" data-target="#Other"><!-- a href begin -->
						
						Other
						<i class="fa fa-fw fa-caret-down"></i>
						
				</a><!-- a href finish -->
				
				<ul id="Other" class="collapse"><!-- collapse begin -->
					<?php 	
					$prod_list = "select * from product_categories where cid='4'  "; # 
					$run_prod_list = mysqli_query($con,$prod_list);
					while($row_prod_list=mysqli_fetch_array($run_prod_list)){
						
						$prod_category_name = $row_prod_list["p_cat_title"];
						$prod_category_id = $row_prod_list["p_cat_id"];
						$categories = $row_prod_list["categories"];
						echo "
							<li><!-- li begin -->
								<a href='shop.php?p_cat=$prod_category_id'> $prod_category_name </a>
							</li><!-- li finish -->
						";
					
					}
					?>
				</ul><!-- collapse finish -->
				
			</li><!-- li finish -->	
            	
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->