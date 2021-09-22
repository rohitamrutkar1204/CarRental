<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="login_style.css">
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> -->
  <title>Sign Up</title>
</head>
<body>

<div class="login-box">
  <h1>SignUp</h1>

  <form action="registereduser.php" method="post">
      
    <div class="textbox">
      <!-- <i class="fas fa-user"></i> -->
      <input type="text" name="UName" placeholder="Username">
    </div>

    <div class="textbox">
      <!-- <i class="fas fa-lock"></i> -->
      <input type="password" name="Password" placeholder="Password">
      
    </div>

    <div class="textbox">
      <!-- <i class="fas fa-lock"></i> -->
      <input type="text" name="Email" placeholder="Email">
      
    </div>

    <div class="textbox">
      <!-- <i class="fas fa-lock"></i> -->
      <input type="text" name="Mobile" placeholder="Mobile No.">
      
    </div>

    <!-- <input type="button" class="btn" name="Login" value="Sign in"> -->
    <button class="btn btn-success mt-3" name="Login">SignUp</button>
      
  </form>
</div>
  
</body>
</html>

