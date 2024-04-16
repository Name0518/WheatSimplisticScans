<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="homepage">
    <?php include 'menu.php'; ?>
    <?php

    $products = array("","Normal Orange","Normal Apple","Normal Pear","This 'thing'");
    $price = array("","$2.99","$1.99","$4.99","Free of charge");
    if (isset($_SESSION['cart'])){
        $count=0;
        while ($count <= (count($_SESSION['cart']))-1) {
            $productId = $_SESSION['cart'][$count]; 
            $productName = $products[$productId]; 
            $productPrice = $price[$productId];
            echo "<div class='cart-item'>";
            echo "<h1>Product: $productName</h1>"; 
            echo "<p>Price: $productPrice</p>";
            echo "</div>";
            $count++;
        }
      if (isset($_SESSION['login'])){
      echo "<p><a href='checkout.php'>Pay Now</a></p>";
        echo "<p><a href='clear-cart.php'>Empty Cart</a></p>";
      }else{
        echo "<p><a href='login.php?redirect=true'>Pay Now</a></p>";
        echo "<p><a href='clear-cart.php'>Empty Cart</a></p>";
      }
    }else{
      echo "<h1>Your cart is empty</h1>";
    }
    ?> 
    
  </div>
  <div>

  </div>
  <script src="script.js"></script>
</body>

</html>

