<?php
session_start();
session_unset();
;
?>
<!DOCTYPE HTML>
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
    <h1>You are now logged out.</h1>
    <p><a href=login.php>Login Again</a></p>
    <p><a href=index.php>Back to homepage</a></p>
    </div>
  </body>
</html>