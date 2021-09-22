<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorial</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  
</head>
<body>
<?php
            session_start();
            if(isset($_SESSION['User']))
                {
?>
                <?php include 'menu_content.php'; ?>
                <?php include 'services_cars_content.php'; ?>
                <!-- <?php include 'pricing_content.php'; ?> -->
                <?php include 'footer_content.php'; ?>
<?php
                }
            else
                {
                  // echo "<p class="text-center">To know the details, please login : </p>";
                  echo "To know the details, please login : ";
                  echo '<a class="text-center" href="login_page.php">Login here</a>';
                  echo "<br>If you have not registered, signup first by clicking here : ";
                  echo '<a class="text-center" href="signup.php">Sign Up</a>';
                }
?>

</body>
</html>