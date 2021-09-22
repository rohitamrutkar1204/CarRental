<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <?php
            if(!isset($_SESSION['User']))
                {
                  session_start();
                }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img id="logo" src="https://cdn1.vectorstock.com/i/1000x1000/86/00/logo-for-car-rental-and-sales-vector-25468600.jpg">
    <a class="navbar-brand" href="index.php"><i><h1>Car Rentals</h1></i>...let’s hire your ride</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_page.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_page.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="services_cars_page.php">Car Rentals</a>
            <a class="dropdown-item" href="services_bikes_page.php">Bike Rentals</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="other_rentals_page.php">Other Rentals</a>
          </div>
        </li>
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
        <!-- </li> -->
        <?php
            if(!isset($_SESSION['User']))
                {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="login_page.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">SignUp</a>
        </li>
        <li class="nav-item">
        <?php
                }
        ?>



        <?php
            if(isset($_SESSION['User']))
                {
                    // echo '<h3> Welecome </h3>' . $_SESSION['User'].'<br/>';
                    echo '<a class="nav-link"><i> Welcome </i>' . $_SESSION['User'].'</a><br/>';
                
                // else
                // {
                //     header("location:login_page.php");
                // }
        ?>
        </li>
        <li class="nav-item">
        <?php 
        // echo '<a href="logout.php?logout">Logout</a>';
        echo '<a class="nav-link" href="logout.php?logout">Logout</a>';
      }
        ?>
        </li>
      </ul>
      <!-- if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php");
            } -->
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
