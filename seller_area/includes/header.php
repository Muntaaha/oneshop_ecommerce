<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Shop Seller Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php 
	if(isset($_SESSION['seller_email'])){
		$seller_email = $_SESSION['seller_email']
		$query = "select * from sellers where seller_email='$seller_email'";
		$run_query = mysqli_query($con,$get_query);
		
		while($row5=mysqli_fetch_array($run_query)){
                                    
			$seller_id = $row5['seller_id'];
			
			$_SESSION['seller_id'] = $seller_id;
	}
?>