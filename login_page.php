<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LoginCarRentals</title>
    <link rel="stylesheet" href="login_style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  </head>
  <body>
<div class="login-box">

<?php 
    if(@$_GET['Empty']==true)
    {
?>
    <div class="alert-light text-danger text-center py-3"><i><?php echo $_GET['Empty'] ?></i></div>                                
<?php
    }
?>

<?php 
    if(@$_GET['Invalid']==true)
    {
?>
    <div class="alert-light text-danger text-center py-3"><i><?php echo $_GET['Invalid'] ?></i></div>                                
<?php
    }
?>

<h1>Login</h1>

<form action="process.php" method="post">
    
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="UName" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="Password" placeholder="Password">
    
  </div>

  <!-- <input type="button" class="btn" name="Login" value="Sign in"> -->
  <button class="btn btn-success mt-3" name="Login">Login</button>
    
</form>

</div>
  </body>
</html>
