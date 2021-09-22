<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="checkout_page.css" rel="stylesheet" type="text/css" />
  <title>TVS APACHE RTR 160</title>
</head>
<body>
  <?php include 'menu_content.php'; ?>

  <div class="container">
    <div class="image">     
         <img src="https://files.prokerala.com/bikes/images/photo/full/tvs-apache-rtr-180-1218/tvs-apache-rtr-180-front-view.jpg" id="img"> 
    </div>
    <div class="heading">
      
        <h3 id="car_heading">TVS APACHE RTR 160 </h3>
        <h3 id="heading_booking">Booking Details</h3>
        
        <form action="orders.php" method="post">

            <div class="calendar">
            <span> <p>Start Date:</p></span>
              <input type="text" id="startdate"  name="startdate" placeholder="Month / Day / Year">
            <span> <p id="to">To</p></span>
              <span><p>End Date:</p></span>
              <input type="text" id="enddate"    name="enddate" placeholder="Month / Day / Year">
            </div>
            <div class="vl"></div>
            <div class="details">
              <p id="heading_details">Enter Your Details</p>
            
              <input type="text" placeholder="Name" name="checkout_name" required >
              <input type="text" placeholder="Address" name="checkout_address" required>
              <input type="text" placeholder="E-mail Id." name="checkout_email" required>
              <input type="text" placeholder="Mobile No." name="checkout_mobile" required>
              <input type="checkbox" id="checkout_checkbox" name="checkout_checkbox">I accept the terms and agreement.
              <input type="submit"  value="Proceed to pay -->" id="checkout_submit" name="checkout_submit" >
              <input type="text" name="rent" value="100" style="display:none;" >
            </form> 
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