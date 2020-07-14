<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Pages</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>User Section</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register.php">Register</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories order by 1 DESC LIMIT 1,8";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p Start -->
                    
                    <strong>One Shop</strong>
                    <br/>Shahreen Haque
                    <br/>Ummey Mukta
                    <br/>+8801849112288
                    <br/>jui@gmail.com
                    <br/><strong>mukta@gmail.com</strong>
                    
                </p><!-- p Finish -->
                
                <a href="contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Go through Our Blogs</h4>
                
                <p class="text-muted">
                   <a href="http://localhost/oneshop_ecommerce/blog_details.php?id=1">Click Here</a> to see our most popular blog.
                </p>
                
                <!-- <form action="#" method="post" target="popupwindow" onsubmit="window.open('#', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                  <!--   <div class="input-group"> --><!-- input-group begin -->
                        
                       <!--  <input type="text" class="form-control" name="email"> -->
                        
                      <!--   <input type="hidden" value="one-Shop-Media" name="uri"/><input type="hidden" name="loc" value="en_US"/> -->
                        
                       <!--  <span class="input-group-btn"> --><!-- input-group-btn begin -->
                            
                           <!--  <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span> --><!-- input-group-btn Finish -->
                        
                   <!--  </div> --><!-- input-group Finish -->
               <!--  </form> --><!-- form Finish --> 
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="https://www.facebook.com/shahreen0111" class="fa fa-facebook"></a>
                    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fmobile.twitter.com%2FIJahaan%3Ffbclid%3DIwAR3Nk9ucN38X-M8CpdRh51OhgWpqVewc48wclLEu6rMq7QsGt_qANE4hJPg&h=AT0oOPxlWtITUmrhp-G6yceHjxBdctjD_HxekypURnh6UT6hvQQrLWiodO6VysU7Ik1sWb9A0q_UfM6Ao0toItYpfqvhskFlpCftLvBiYdL6aiXSov8G8Pv0p5DZeU5_kYoaPqWRl7Y2NYA" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                   <!--  <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a> -->
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


