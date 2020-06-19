<?php 

    $active='Cart';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Blog
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   <?php 
   if(isset($_GET['id'])){
	   $id = $_GET['id'];
    
		$get_blog = "select * from blog where id='$id'";
		
		$run_blog = mysqli_query($con,$get_blog);
		
		$row_blog = mysqli_fetch_array($run_blog);
		
		$title = $row_blog['title'];
		
		$description = $row_blog['description'];
		
		$image = $row_blog['image'];
   }
   
   ?>
   <center><h1><?php echo $title; ?></h1>
	<img class='img-responsive' src='admin_area/admin_images/<?php echo $image; ?>'>
	<p style="text-align:center; margin: 30px 0; font-size:20px;"> <?php echo $description; ?></p>
   
   </center>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
