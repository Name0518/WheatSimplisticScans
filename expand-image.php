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
    <?php  
    $products = array("","Normal Orange","Normal Apple","Normal Pear","This 'thing'");
    $price = array("","$2.99","$1.99","$4.99","Free of charge");
      include 'menu.php';
    $id = $_GET['id'];
    echo "<h1>Product: ".($products[$id])."</h1>";
    echo "<p>Price: ".($price[$id])."</p>";
    echo "<center><img class='expandedimage' src='listing/".($id).".png'>";
    echo "<br><td><a href='add-to-cart.php?id=". ($id) . "'>Add to Cart</a></td>";
    ?>
      </center>
</div>
  <div>

  </div>
  <script src="script.js"></script>
</body>

</html>