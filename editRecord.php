<?php
  // session_start(); //starts the session
  // if($_SESSION['user']){} //checks if user is logged in
  // else{
  // header("location:index.php "); // redirects if user is not logged in
  // }

  // $user = $_SESSION['user']; //assigns user value

  $id = ($_POST['id']);
  require 'connection.php'; //Connect to server
  $checkIn = ($_POST['check-in']);//check in
  $checkOut = ($_POST['check-out']);//out
  $adults = ($_POST['adults']);//adult
  $children = ($_POST['children']);//child
  $roomID = ($_POST['room']);//room

  //$id = $_SESSION['id'];

  $query = mysqli_query($con, "SELECT booking.id,booking.guest_ID FROM booking LEFT JOIN guest ON guest.id = booking.guest_ID WHERE booking.id='$id'"); // SQL Query
  while($row=mysqli_fetch_array($query)){
    $guestID=$row['guest_ID'];
  }



  if(!empty($checkIn)){
    mysqli_query($con, "UPDATE booking SET checkIn='$checkIn' WHERE id='$id'");
  }
  if(!empty($checkOut)){
    mysqli_query($con, "UPDATE booking SET checkOut='$checkOut' WHERE id='$id'");
  }
  if(!empty($adults)){
    mysqli_query($con, "UPDATE guest SET adults='$adults' WHERE id='$guestID'");
  }
  if(!empty($children)){
    mysqli_query($con, "UPDATE guest SET children='$children' WHERE id='$guestID'");
  }
  if(!empty($roomID)){
    mysqli_query($con, "UPDATE booking SET room_ID='$roomID' WHERE id='$id'");
  }
  header("location: AdminBookings.php");
  
?>