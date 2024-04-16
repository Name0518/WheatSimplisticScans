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
    <h1>Welcome to this website</h1>
    <p>We sell apples, oranges and pears for your convenience</p>
<div class='sponsordescription'>
  <p>A word from our team</p>
  <?php
$count = 0;
$sponsors = array("Chicken Man", "Cangjie", "Knife Man", "Mafia Man");
$sponsor_descriptions = array("Chicken Man sells chicken. He also can sing, dance, rap, and play basketball. He is our main sponsor", "He's just here because we thought he was rich. Also he coded this website, <a target='.blank' href='https://github.com/Name0518'>Click here for Github Page</a>", "Northeastern Knife man is our main provider with good fruit from the Northeast of China", "Lastly we have mafia man. He swears at people on the internet and is a famous internet meme and our sponsor");
while ($count<=(count($sponsors)-1)){
  echo '<h1>'.$sponsors[$count].'</h1>';
  $count++;
  echo "<div>";
  echo "<p>" . $sponsor_descriptions[$count-1] .'</p>';
  echo "<img class='gallery' src='images/".($count).".jpg'>";
  echo "</div>";
}
  
?>
</div>


  </div>
</body>

</html>