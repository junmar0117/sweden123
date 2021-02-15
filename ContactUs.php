<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/contact-us.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Contact Us | The Grand Sweden Hotel</title>
</head>

<body>
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

  <!-- Page Content -->
  <div class="contact-us">
    <div class="contact-wrap">
      <div class="contact-in">
        <h1>Send a Message</h1>
        <form action="SendMessage.php" method="POST">
          <input type="text" class="contact-in-input" id="fullname" name="fullname" placeholder="Full Name" required>
          <input type="email" class="contact-in-input" id="emailAdd" name="emailAdd"
            placeholder="Email Address (name@mail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          <input type="text" class="contact-in-input" id="subject" name="subject" placeholder="Subject" required>
          <textarea placeholder="Message" id="content" name="content" class="contact-in-textarea" required></textarea>
          <input type="submit" value="SUBMIT" class="contact-in-btn">
        </form>
      </div>
      <div class="contact-in">
        <h1>Contact Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
        <p>123-456-789<br />123-456-789</p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
        <p>contact@thegrandswedenhotel.com</p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
        <p>Vasant Vihar, Delhi, India<br />Vasant Vihar, Delhi, India</p>
        <!-- <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul> -->
        <div class="contact-in"><iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7395.3901515010975!2d18.064440391836012!3d59.32866061033398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x465f9d59a360c329%3A0x8cdb57e6f314fc67!2sGrand%20H%C3%B4tel%2C%20S%C3%B6dra%20Blasieholmshamnen%208%2C%20103%2027%20Stockholm%2C%20Sweden!3m2!1d59.3297083!2d18.075416699999998!5e0!3m2!1sen!2sph!4v1613389560444!5m2!1sen!2sph"
            width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>

        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="row">
        <div class="footer-col col-1">
          <h4>The Grand Sweden Hotel</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="accomoations.php">Accomodation</a></li>
            <li><a href="experiences.php">Experiences</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="destination.php">Destination</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="signin.php">Administrator</a></li>
          </ul>
        </div>
        <div class="footer-col col-2">
          <h4>Get in touch</h4>
          <ul>
            <li>PO Box 222 333 Sen. Gil J. Puyat Ave, Makati</li>
            <li>+632 8247-5000</li>
            <li>Privacy Policy</li>
          </ul>
        </div>
        <div class="footer-col col-3">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="copyright">
        <a>© Copyright 2021. All Rights Reserved.</a>
      </div>
    </div>
  </footer>
</body>

</html>