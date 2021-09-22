
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="payment.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Lexend+Mega&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&display=swap" rel="stylesheet">
  <title>Payment</title>
</head>
<body>
  

 
  <div class="container">
  
    <h1 id="payment_heading">PAYMENT</h1>  
    <div class="inner">
    <h1 id="amount_heading">Total Amount : <?php session_start(); echo $_SESSION['total']; ?>Rs/-  </h1>
  </div>
    <div class="sub"><span>(Including GST)</span></div>

    <div class="sec_inner">
      <form action="payment_process.php" method="post">
      <h3 id="number">CARD NUMBER</h3>
      <input type="text" placeholder="Card Number" id="creditcard"  name="creditcard" required>
    
    <div class="expirydate" >
      <h3>EXPIRATION DATE</h3>
      <input type="text" placeholder="MM/YY" id="expiry"  name="expiry" required>
    </div>

    <div class="cvv">
      <h3>ENTER CVV</h3>
      <input type="text" placeholder="****" id="cvc"  name="cvc" required>
    </div>
   

    <input type="submit" name="submit" value="MAKE PAYMENT" id="submit" onclick="myfun()" style="display:block;">
  </form>
    </div>
</div>

<script>
  function myfun()
  {
    alert("Payment Successfull");
    window.location = "index.php";
  }

  </script>


</body>
