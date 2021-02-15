<?php

?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Book Now | The Grand Sweden Hotel</title>
  <link rel="icon" href="assets/icon.png">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/book-now.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  <section class="index-top">
  </section>
  <!-- Forms -->
  <section class="book-now">
    <form action="book.php" method="GET" id="booking">
      <!-- Form Top -->
      <div class="booking">
        <!-- Check in Check Out Adult Children -->
        <div class="container-1">
          <div class="input-group">
            <label for="check-in" class="input-label">Check in</label>
            <!-- <?php  //checks if check-in from index.php has value (DI KO PA NA-SOLVE)
              // if(($_GET['check-in'])){
              //   $check_in_home = ($_GET['check-in']);
              //   //$check_out_home = ($_GET['check-out']);
              //   echo '<input type="date" class="input" id="check-in" name="check-in" placeholder="'.$check_in_home.'" required>';
              // }
              // else
              //   echo '<input type="date" class="input" id="check-in" name="check-in" required>'              
            ?> -->
            <input type="date" class="input" id="check-in" name="check-in" required>
          </div>
          <div class="input-group">
            <label for="check-out" class="input-label">Check out</label>
            <input type="date" class=" input" id="check-out" name="check-out" required>
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
        </div>
      </div>
      <!-- Form Bottom-->
      <div class="booking">
        <div class="container">
          <!-- Content -->
          <div class="form-outer">
            <!-- Step 1: Select a Room -->
            <div class="form-form">
              <div class="page slide-page">
                <div class="title">
                  <h3>Select a Room</h3>
                </div>
                <span class="left">Click the button to select a room</span>
                <div class="container-2">
                  <!-- group -->
                  <div class="output-group room">
                    <img src="assets/accomodation/room1.jpg" alt="image" width="250" height="200">
                    <div class="details">
                      <input type="radio" id="room1" name="room" value="room1">
                      <label for="room1">
                        <h3>Standard Room</h3>
                      </label>
                      <p><b>Size:</b> from 45m2 (484ft2)</p>
                      <p><b>Max guests:</b> 4</p>
                      <p><b>Bed:</b> Twin</p>
                      <p><b>SEK 10,000 / NIGHT</b></p>
                    </div>
                  </div>
                  <!-- group -->
                  <div class="output-group">
                    <img src="assets/accomodation/room2.jpg" alt="image" width="250" height="200">
                    <div class="details">
                      <input type="radio" id="room2" name="room" value="room2">
                      <label for="room2">
                        <h3>Deluxe Room</h3>
                      </label>

                      <p><b>Size:</b> from 35m2 (376ft2)</p>
                      <p><b>Max guests:</b> 5</p>
                      <p><b>Bed:</b> Queen</p>
                      <p><b>SEK 20,000 / NIGHT</b></p>
                    </div>
                  </div>
                  <!-- group -->
                  <div class="output-group">
                    <img src="assets/accomodation/room3.jpg" alt="image" width="250" height="200">
                    <div class="details">
                      <input type="radio" id="room3" name="room" value="room3">
                      <label for="room3">
                        <h3>Suite Room</h3>
                      </label>

                      <p><b>Size:</b> from 55m2 (592ft2)</p>
                      <p><b>Max guests:</b> 6</p>
                      <p><b>Bed:</b> King</p>
                      <p><b>SEK 30,000 / NIGHT</b></p>
                    </div>
                  </div>
                </div>
                <!-- Step 2 Select add-ons -->
                <div>
                  <div class="title">
                    <h3>Enhance Your Stay</h3>
                  </div>
                  <span class="left">Click the button to select</span>
                  <div class="container-2">
                    <!-- group -->
                    <div class="output-group">
                      <img src="assets/destination/drottningholm.jpg" alt="image" width="250" height="200">
                      <div class="details">
                        <input type="radio" id="room1" name="room" value="room1">
                        <p>1,356 sq. ft. / 126 sq. m.</p>
                        <p>Max guests 4</p>
                        <p>Ocean view</p>
                        <p>1 Bedroom</p>
                      </div>
                    </div>
                    <!-- group -->
                    <div class="output-group">
                      <img src="assets/destination/drottningholm.jpg" alt="image" width="250" height="200">
                      <div class="details">
                        <h3><label for="room2">Room 2</label></h3>
                        <p>1,356 sq. ft. / 126 sq. m.</p>
                        <p>Max guests 4</p>
                        <p>Ocean view</p>
                        <p>1 Bedroom</p>
                      </div>
                    </div>
                    <!-- group -->
                    <div class="output-group">
                      <img src="assets/destination/drottningholm.jpg" alt="image" width="250" height="200">
                      <div class="details">
                        <input type="radio" id="Room 3" name="room" value="room3">
                        <h3>Room 3</h3>
                        <p>1,356 sq. ft. / 126 sq. m.</p>
                        <p>Max guests 4</p>
                        <p>Ocean view</p>
                        <p>1 Bedroom</p>
                      </div>
                    </div>
                    <!-- group -->
                    <div class="output-group">
                      <img src="assets/destination/drottningholm.jpg" alt="image" width="250" height="200">
                      <div class="details">
                        <h3>Room 1</h3>
                        <p>1,356 sq. ft. / 126 sq. m.</p>
                        <p>Max guests 4</p>
                        <p>Ocean view</p>
                        <p>1 Bedroom</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Step 3: Contact Info, Select Payment Method, Discount -->
                <div>
                  <!-- Guest Details -->
                  <div class="title">
                    <h3>Contact Information</h3>
                  </div>
                  <div>
                    <div class="container-3">
                      <div class="input-group half">
                        <select class="options" id="prefix" name="prefix" required>
                          <option disabled selected>Prefix</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Ms.">Ms.</option>
                          <option value="MrRev.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Pr.">Pr.</option>
                          <option value="Rev.">Rev.</option>
                        </select>
                        <input type="text" class="input" id="firstname" name="firstname" placeholder="First Name"
                          required>
                      </div>
                      <div class="input-group">
                        <input type="text" class="input" id="lastname" name="lastname" placeholder="Last Name" required>
                      </div>
                    </div>
                    <!-- 2 -->
                    <div class="container-3">
                      <div class="input-group">
                        <!-- <label for="phonenumber" class="input-label-form">Phone Number</label> -->
                        <input type="tel" class="input" id="phonenumber" name="phonenumber"
                          placeholder="Phone Number (09XXXXXXXXX)" pattern="[0-9]{11}" required>
                      </div>
                      <div class="input-group">
                        <!-- <label for="email" class="input-label-form">Email Address</label> -->
                        <input type="email" class="input" id="email" name="email"
                          placeholder="Email Address (name@mail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <small>This is the email we will send your confirmation to.</small>
                      </div>
                    </div>
                    <!-- 3 -->
                    <div class="container-3">
                      <div class="input-group">
                        <!-- <label for="address" class="input-label-form">Address</label> -->
                        <input type="text" class="input" id="address" name="address" placeholder="Street Address"
                          required>
                      </div>
                      <div class="input-group half">
                        <input type="text" class="input" id="city" name="city" placeholder="City" required>
                        <input type="text" class="input" id="state" name="state" placeholder="State/Province" required>
                        <input type="text" class="input" id="zipcode" name="zipcode" placeholder="Zip/Postal Code"
                          pattern="[0-9]*" minlength="2" maxlength="4" required>
                      </div>
                    </div>
                  </div>
                  <!-- Payment Information -->
                  <div class="title">
                    <h3>Payment Information</h3>
                  </div>
                  <div>
                    <div class="container-3">
                      <div class="input-group">
                        <input type="text" class="input" id="cardholder" name="cardholder"
                          placeholder="Cardholder Name">
                      </div>
                    </div>
                    <div class="container-3">
                      <div class="input-group half">
                        <input type="text" class="input" id="cardnumber" name="cardnumber" placeholder="Card Number"
                          pattern="[0-9]{16}" required>
                        <input type="text" class="input" id="expiration" name="expiration"
                          placeholder="Expiration Date (MM/YYYY)" pattern="[0-9]{2}/[0-9]{4}" required>
                        <input type="text" class="input" id="cvv" name="cvv" placeholder="CVV" pattern="[0-9]{3}"
                          required>
                      </div>
                    </div>
                  </div>
                  <!-- Prev Next Button -->
                  <div class="field btns">
                    <button class="firstNext next-2 next">Next</button>
                  </div>
                </div>
              </div>

              <!-- Step 4: Summary -->
              <div class="page">
                <div class="title">
                  <h3>Confirmation</h3><!-- display guest info for confirmation -->
                </div>
                <div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Name</h4>
                      <span id="disp_name"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Phone number</h4>
                      <span id="disp_phone"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Address</h4>
                      <span id="disp_address"></span>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Check in date</h4>
                      <span id="disp_check_in"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Check out date</h4>
                      <span id="disp_check_out"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Adults</h4>
                      <span id="disp_adults"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Children</h4>
                      <span id="disp_children"></span>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Room</h4>
                    </div>
                    <div class="output-group outline">
                      <h4>Add-ons</h4>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="container-5 outline">
                      <div class="output-group ">
                        <h4>Total price</h4>
                        <span> 3k coursera fee</span>
                      </div>
                      <div class="output-group ">
                        <h4>Discount/s applied</h4>
                        <span> 3k coursera fee</span>
                      </div>
                    </div>
                  </div>
                  <div class="container-6 outline-total">
                    <div class="output-group ">
                      <h4>Total amount due</h4>
                    </div>
                    <div class="output-group ">
                      <span> 3k coursera fee</span>
                    </div>
                  </div>
                </div>
                <!-- Policies-->
                <div class="title">
                  <h3>Policies</h3>
                </div>
                <div>
                  <div class="text-group">
                    <h4>Guarantee Policy</h4>
                    <p>Valid credit card details required to guarantee reservation. Full prepayment required 15 days
                      prior to arrival.</p>
                  </div>
                  <div class="text-group">
                    <h4>Cancel Policy</h4>
                    <p>Cancel by 12 noon, 15 days prior to arrival to avoid 50% of total value of the stay penalty
                      plus tax. Same day cancellation, no-show or early departure, 100% penalty plus tax will be
                      applied. </p>
                  </div>
                </div>
                <!-- Acknowledgement-->
                <div class="title">
                  <h3>Acknowledgement</h3>
                </div>
                <div class="text-group">
                  <label for="news" class="checkbox-text">
                    I would like to receive newsletters and special offers by email.
                    <input type="checkbox" class="check" id="news" name="news" value="news">
                    <span class="checkmark"></span>
                  </label>
                  <label for="terms" class="checkbox-text">
                    I agree with the Privacy Terms.*
                    <input type="checkbox" class="check" id="terms" name="terms" value="terms" checked="checked"
                      required>
                    <span class="checkmark"></span>
                  </label>
                  <label for="conditions" class="checkbox-text">
                    I agree with the Booking Conditions.*
                    <input type="checkbox" class="check" id="conditions" name="conditions" value="conditions"
                      checked="checked" required>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <!-- Prev Next Button -->
                <div class="field btns">
                  <input type="submit" value="Submit" />
                  <!-- <button type="submit">Submit</button> -->
                </div>
              </div><!-- END OF PAGE -->
            </div><!-- END OF FORMFORM -->
          </div><!-- END OF OUTER FORM -->
        </div><!-- END OF CONTAINER -->
      </div><!-- END OF BOOKING -->

      <!--hanggang dito lang pweds zhena kasi ibang section na yung check in/out date-->


      <input type="submit" value="Submit" id="submit" style="visibility: hidden;"/>

    </form>
  </section>
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
  <!-- script -->
  <script src="js/book-now-script.js"></script>

</body>

</html>