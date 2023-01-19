<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'] )){
  header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" >
    <div class="content">
        <h3>hi, <span>user</span></h3>
        <h1>welcom <span><?php echo $_SESSION['user_name']?></span></h1>
        <p><b>this is an user page</b> </p>
        <p><b>Multimedia and Hypermedia Development</b></p>
        <p><b>Assignment</b></p>
        <p><b>BY : EUSL/TC/IS/2020/COM/26</b></p>
        <a href="login_form.php" class="btn" >login</a> 
        <a href="register_form.php" class="btn" >register</a> 
        <a href="logout_form.php" class="btn" >logout</a> 
    </div>
  </div> 
</body>
</html>