<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];



$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . "  and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
      
        
                <meta charset="UTF-8">
        <title>Lifestyle Store | Success</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
                
        <?php
		include 'includes/header.php';
		?>

     
     
     
     
     <br><br><br><br><br><br><br><br><br><br>
        <div class=" container">
            
            <div class="jumbotron">
                <center>
                <h2><b>Your Order is confirmed.Thank you for shopping with us.The order shall be delivered to you shortly.</b></h2>
                </center>
                <hr>
                <center>
                    <p>Click <a href="products.php">here</a> to purchase any other item.</p>
                </center>
            </div>
             
        </div>
        
    <?php
        include 'includes/footer.php';
        ?> 
        
    </body>
</html>
