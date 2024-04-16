<!DOCTYPE HTML>
<html>
  <link rel="stylesheet" type="text/css" href="menu_style.css"> 
  <div class="navbar">
    <ul>
      <li class="navbarlist"><a href=index.php>Home</a></li>
      <li class="navbarlist"><a href=gallery.php>Our Products</a></li>
      <li class='navbarlist'><a href=cart.php>Cart</a></li>
      <?php
      if (isset($_SESSION['login'])){
          echo "<li class='navbarlist'><a href=signed-out.php>Log Out</a></li>";
      }else{
          echo "<li class='navbarlist'><a href=login.php>Log In</a></li>";
      }
?>
    </ul>
  </div>
</html>