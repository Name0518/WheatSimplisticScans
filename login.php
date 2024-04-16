<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Storefront</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="homepage">
    <?php include 'menu.php'; ?>

<h1>Login</h1>

<?php 
    
if (isset($_SESSION['login'])){
    echo "<p>Already logged in as: ".$_SESSION['login']."</p>";
}elseif ((isset($_GET['failed'])) && ($_GET['failed'] == true)){
    echo "<p>Incorrect login information.</p>";
}else{
    echo "<p>You are not logged in yet.</p>";
}

$redirect = isset($_GET['redirect']);
$captchacode = rand(0,3);

 echo" <div class='login'>
        <form action = 'confirm.php?redirect=$redirect' method = 'post'><br>
            User Name: 
            <br>
            <input type='text' name='username'>
            <br>
            Password:
            <br>
            <input type = 'password' name = 'password'>
            <br>

            
             <img src=captchas/$captchacode.png height=40px>
            <br>Enter what you see<br><input type = 'text' name = 'captcha'><br>
              
            <input type='submit'name = 'submit' value = ' Log in '>
        </form>
        </div>";
?>


  </div>


    </div>
  </body>

  </html>