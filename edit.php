<?php
session_start(); //starts the session
if($_SESSION['user']){} //checks if user is logged in
else{
  header("location:index.php "); // redirects if user is not logged in
}

$user = $_SESSION['user']; //assigns user value
$id_exists = false;
?>

<!DOCTYPE html>
<html>

<head>
<!-- <link href="" rel="icon" sizes="16x16"> -->
<link rel="icon" href="assets/icon.png">
<link href="css/admin1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
<title>Admin Bookings | The Grand Sweden Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>
<!-- Nagigation bar -->
<nav>
  <div class="logo"><a href="userprofile.php">The Grand Sweden Hotel</a></div>
  <input id="nav-toggle" type="checkbox">
  <ul class="links">
    <li><a href="userprofile.php">Profile</a></li>
    <li><a href="adminpage.php">Messages</a></li>
    <li><a href="adminbookings.php">Bookings</a></li>
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
    <h1>Hotel Reservations</h1>
    <h3>You may now edit this booking.</h3>  
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Check in</th>
          <th scope="col">Check out</th>
          <th scope="col">Adult</th>
          <th scope="col">Children</th>
          <th scope="col">Room</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $id = $_GET['id'];
          $_SESSION['id'] = $id;
          $id_exists = true;
          require 'connection.php';
          $query = mysqli_query($con, "SELECT booking.id,booking.guest_ID,booking.room_ID,booking.checkIn,booking.checkOut,
                        guest.adults,guest.children FROM booking LEFT JOIN guest ON guest.id = booking.guest_ID"); // SQL Query
          while($row = mysqli_fetch_array($query)){
              Print "<tr>";
              Print '<td>'. $row['id'] . "</td>";
              Print '<td>'. $row['checkIn'] . "</td>";
              Print '<td>'. $row['checkOut'] . "</td>";
              Print '<td>'. $row['adults'] . "</td>";
              Print '<td>'. $row['children'] . "</td>";
              Print '<td>'. $row['room_ID'] . "</td>";
              Print "</tr></tbody>
              </table>";
              $checkIn=$row['checkIn'];
              $checkOut=$row['checkOut'];
              $adults=$row['adults'];
              $children=$row['children'];
              $roomID=$row['room_ID'];
              Print 
              '<form action="editRecord.php?id" method="POST">
                Update List: <br/>
                Check in: <input type="date" name="check-in" value="'.$checkIn.'"/><br/>
                Check out: <input type="date" name="check-out" value="'.$checkOut.'"/><br/>
                <input type="hidden" name="id" value="'.$id.'">
                Adults: <input type="text" name="adults" value="'.$adults.'"/><br/>
                Children: <input type="text" name="children" value="'.$children.'"/><br/>
                
                Room: <input type="text" name="room" value="'.$roomID.'"/><br/>';
                
                
              Print'<input type="submit" value="Update List"/></form>';
          }
          ?>
      

    

  </div>
  <!-- <script>
    function myFunction(guest_ID){
      var r=confirm("Are you sure you want to delete this record?");
      if (r==true){
          window.location.assign("deleteRecord.php?id=" + guest_ID);
      }
    }
  </script> -->
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

<!-- <?php

  // require 'connection.php'; //Connect to server
  // $checkIn = ($_POST['check-in']);//check in
  // $checkOut = ($_POST['check-out']);//out
  // $adults = ($_POST['adults']);//adult
  // $children = ($_POST['children']);//child
  // $roomID = ($_POST['room']);//room

  // $id = $_SESSION['id'];
  
  // if(!empty($checkIn)){
  //   mysqli_query($con, "UPDATE booking SET checkIn='$checkIn' WHERE id='$id'");
  // }
  // if(!empty($checkOut)){
  //   mysqli_query($con, "UPDATE booking SET checkOut='$checkOut' WHERE id='$id'");
  // }
  // if(!empty($adults)){
  //   mysqli_query($con, "UPDATE booking SET checkIn='$adults' WHERE id='$id'");
  // }
  // if(!empty($checkIn)){
  //   mysqli_query($con, "UPDATE booking SET checkIn='$checkIn' WHERE id='$id'");
  // }
  // if(!empty($checkIn)){
  //   mysqli_query($con, "UPDATE booking SET checkIn='$checkIn' WHERE id='$id'");
  // }
  // header("location: AdminBookings.php");
  
?> -->