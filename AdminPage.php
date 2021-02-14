<?php

?>

<!DOCTYPE html>
<html>

<head>
  <!-- <link href="" rel="icon" sizes="16x16"> -->
  <link href="css/admin1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <title>Admin Bookings | The Grand Sweden Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>
  <!-- Nagigation bar -->
  <nav>
    <div class="logo"><a href="index.php">The Grand Sweden Hotel</a></div>
    <ul class="links">
      <li><a href="adminpage.php">Messages</a></li>
      <li><a href="adminbookings.php">Bookings</a></li>
      <li><a href="userprofile.php">Profile?</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <!-- Page Content -->
  <div class="page-content">

    <div class="container">
      <h1>Contact Us</h1>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
<?php
  $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
	$query = mysqli_query($con, "Select * from messages"); // SQL Query
	while($row = mysqli_fetch_array($query))
  {
          Print"<tr>";
          Print '<th data-title="ID" scope="row">'.$row['id'] . "</th>";
          Print '<td data-title="Full Name">'.$row['fName'] . "</th>";
          Print '<td data-title="Email Address">'.$row['emailAdd'] . "</th>";
          Print '<td data-title="Subject">'.$row['subject'] . "</th>";
          Print '<td data-title="Message">'.$row['content'] . "</th>";
          Print"</tr>";  
  }
        
?>
        </tbody>
      </table>
    </div>

  </div>
  <!-- Footer -->
  <!-- <footer>
    <div class="footer-container">
      <div class="copyright">
        <a>© Copyright 2021. All Rights Reserved.</a>
      </div>
    </div>
  </footer> -->
</body>

</html>