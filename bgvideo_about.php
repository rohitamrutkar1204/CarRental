<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
  height: 500;
}

/* #myVideo {
  right: 0;
  top: 0;
  width: 100%; 
  height: 500;
}

.content {
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
} */

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: relative;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  /* padding: 20px; */
}

.content1 {
  position: relative;
  margin: auto;
  /* left: 400px; */
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 50%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>

<body>

<video autoplay muted loop id="myVideo">
  <source src="car.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <!-- <h1>Car Rentals</h1>
  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button> -->
  
  <?php include 'menu_content.php'; ?> 
  <!-- <div class="jumbotron"> -->
      <br><br>
    <div class="content1">
        <h1 class="text-center"><i>Car/Bike Rentals</i></h1>
        <p class="text-center">If want to rent one out a self-drive car, choose CarRental, where you can pick out your self-drive car based on your travelling needs.
        While small self-drive cars allow you to easily manoeuvre through city traffic, sedans and SUV’s offer more comfort. Affordable prices
            starting at 60/hr helps you rent a car easily. Whether you want to go on a road trip from Bangalore to Coorg or just need a car to travel
            within the city the self-drive CarRental are your best solution. All Self-drive CarRental comes with a limited liability, enabling 
            you to enjoy the comfort of a four-wheeler without having to invest in one, with the added benefit of not having to actually drive it.
            The Self-drive CarRental have even made travel to and from the airport easy. Avoid exorbitantly priced Bangalore airport cabs by choosing
            to travel in a CarRental instead. The Bangalore airport even has a CarRental parking lot where you can get a self-drive car rental as 
            soon as you get off your flight, thus eliminating the time taken to look for a cab or hire one.</p>
        <!-- </div> -->
    </div>
  <?php include 'about_content.php'; ?>
  <?php include 'footer_content.php'; ?>

</div>


<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>