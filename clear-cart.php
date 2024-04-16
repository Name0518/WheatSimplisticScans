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
    unset($_SESSION['cart']);
  
?>

<h1>Cart Cleared. Please shop again.</h1>
<p><a href=gallery.php>Back to shopping</a></p>

    </div>
      <div>

      </div>
      <script src="script.js"></script>
    </body>

    </html>