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
    <h1>This is the gallery.</h1>
    <table>
    <?php
        $count = 0;
        $products = array("Normal Orange","Normal Apple","Normal Pear","This 'thing'");
        $price = array("$2.99","$1.99","$4.99","Free of charge");
        while ($count<=(count($products)-1)){
          echo "<tr>";
          echo '<td><p>'.$products[$count].'</p></td>';
          $count++;
          echo "<td><p>" . $price[$count-1] .'</P></td>';
          echo "<td><a href=expand-image.php?id=".($count).">";
          echo "<img class='gallery' src='listing/".($count).".png'></a></td>";
          echo "<td><a href='add-to-cart.php?id=". ($count) . "'>Add to Cart</a></td>";
          echo "</tr>";
        }
    
      ?>
    </table>
  </div>
  <div>
    
  </div>
  <script src="script.js"></script>
</body>

</html>