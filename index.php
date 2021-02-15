<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="assets/icon.png">
  <link rel="stylesheet" href="css/index-styles.css">
  <title>Home | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Video Background -->
  <video autoplay muted loop id="myVideo" clas="fullscreen-bg">
    <source src="assets/Home.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <section class="index-top">
    <!-- Nagigation bar -->
    <nav>
      <div class="logo"><a href="index.php">The Grand Sweden Hotel</a></div>
      <input id="nav-toggle" type="checkbox">
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="Accommodations.php">Accommodations</a></li>
        <li><a href="Amenities.php">Amenities</a></li>
        <li><a href="Offers.php">Offers</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="Destination.php">Destination</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <li><a href="BookNow.php">Book Now</a></li>
      </ul>
      <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </label>
    </nav>
    <!-- Title -->
    <div class="title">
      <h1>Come, stay and enjoy your day..</h1>
      <div class="container">
        <form action="BookNow.php" method="get">
          <div class="container-1">
            <div class="input-group">
              <label for="check-in" class="input-label">Check in</label>
              <input type="date" class="input" id="check-in" name="check-in" required>
            </div>
            <div class="input-group">
              <label for="check-out" class="input-label">Check out</label>
              <input type="date" " class=" input" id="check-out" name="check-out" required>
            </div>
            <div class="input-group">
              <label for="adults" class="input-label">Adults</label>
              <select class="options" id="adults" name="adults" required>
                <option disabled selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="input-group">
              <label for="children" class="input-label">Children</label>
              <select class="options" id="children" name="children" required>
                <option disabled selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="input-group">
              <input type="submit" value="Book Now" class="register" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>