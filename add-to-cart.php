<?php
session_start();
?>
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
    unset($_SESSION['cart']);
if (empty($_SESSION['cart'])){
  $_SESSION['cart']=array();
}
  array_push($_SESSION['cart'], $_GET['id']);


echo ("<p>Adding: ".$_GET['id']." to the cart.</p>");
echo "<pre>";
var_dump($_SESSION['cart']);
echo "</pre>";
?>


    <h1>Product succesfully added to cart</h3>
    <p><a href="cart.php">View Shopping cart</a></p>
    </br>

    </div>
      <div>

      </div>
      <script src="script.js"></script>
    </body>

    </html>




