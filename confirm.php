<?php
session_start();
$inputteduser = $_POST['username'];
$inputtedpass = $_POST['password'];
$inputtedcaptcha = $_POST['captcha'];

$logininfo = array("moderator" => "modder2007","customer" => "4399games");
$captcha_answers = array("","4fm256","9yhx6b","piufxb","WD54J");

foreach($logininfo as $user => $pass){
  if($inputteduser == $user && $inputtedpass == $pass){
      if (array_search($inputtedcaptcha, $captcha_answers,true)){
      $_SESSION['login'] = $user;
      break;
    }
  }
}



if(isset($_SESSION['login'])==false){
  if (isset($_GET['redirect']) && $_GET['redirect'] == true){
  header("Location: login.php?failed=true&redirect=true");
}else{
    header("Location: login.php?failed=true&redirect=false");
}}
else{
  if (isset($_GET['redirect']) && $_GET['redirect'] == true){
    header("Location: cart.php");
  }else{
    header("Location: index.php");
  }

}

?>