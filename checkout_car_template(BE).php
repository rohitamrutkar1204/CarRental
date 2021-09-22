<!DOCTYPE html>
<?php 
 $con=mysqli_connect("localhost","root","root","carrental");
 session_start() ;
//echo $_SESSION["name"];
// $val = $_SESSION["name"];
// echo $_POST['name'];
 ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="checkout_page.css" rel="stylesheet" type="text/css" />
  <title>Hero Splender Plus</title>
</head>
<body>
  <?php include 'menu_content.php'; ?>

  <div class="container">
   <?php
   $value= $_SESSION["name"];
   $sql ="SELECT * FROM carcheckout  WHERE carname='$value' " ;
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result); 
  
  ?> 
    <div class="image">     
         <img src='<?=$row["image"];?>' id="img"> 
    </div>
    <div class="heading">
        <h3><?php echo $row['carname'];?></h3>
        <h3 id="heading_booking">Booking Details</h3>
        
        <div class="calendar">
         <span> <p>Start Date:</p></span>
          <input type="date" id="startdate">
         <span> <p id="to">To</p></span>
          <span><p>End Date:</p></span>
          <input type="date" id="enddate">
        </div>
        <div class="vl"></div>
        <div class="details">
          <p id="heading_details">Enter Your Details</p>
          <input type="text" placeholder="Name" name="checkout_name" >
          <input type="text" placeholder="Address" name="checkout_address" >
          <input type="text" placeholder="Mobile No." name="checkout_mobile" >
          <input type="checkbox" id="checkout_checkbox" name="checkout_checkbox">I accept the terms and agreement.
          <input type="submit" placeholder="checkout" name="checkout_submit" value="Proceed to pay -->" >
        </div>
    </div>

    </div>
<div class="terms">


      <h3>Terms And Conditions</h3>
      <table>
        <tr>
          <td id="col1">TOLLS, PARKING, INTER-STATE TAXES:</td>
          <td id="col2">	To be paid by you.</td>
        </tr>
        <tr>
          <td id="col1">ID VERIFICATION:</td>
          <td id="col2">Please keep your original Driving License handy. While delivering the car to you, our executive will verify 
            your original Driving License and ID proof (same as the ones whose details were provided while making the booking). 
            This verification is mandatory. In the unfortunate case where you cannot show these documents, we will not be able 
            to handover the car to you, and it will be treated as a late cancellation (100% of the fare would be payable). 
            Driving license printed on A4 sheet of paper (original or otherwise) will not be considered as a valid document.</td>
        </tr>
        <tr>
          <td id="col1"> PRE-HANDOVER INSPECTION:</td>
          <td id="col2">	Please inspect the car (including the fuel gauge and odometer) thoroughly before approving the checklist.</td>
        </tr>
      </table>
    </div>
  
   
    <?php session_destroy();?>

</body>
</html>