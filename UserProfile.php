<?php
session_start(); //starts the session
if (!$_SESSION['user']) { //checks if user is not logged in
  header("location:index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" href="css/user.css">
  <title>Administrator | The Grand Sweden Hotel</title>
</head>
<style>
a{
  color: white;
  text-decoration: none;
}
a:hover{
  color:black;
}
</style>
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
  <div class="login-page">
    <div class="box">
      <div class="form">
        <!-- Login form Start -->
        <form class="login-form">
          <h3>Administrator</h3>
          <div class="pic">
            <img src="assets/admin.png" alt="">
          </div>
          <p>Hello, <?php print "$user" ?>!</p>
          <button class="submit-btn"><a href="register.php"> Add New Admin<a/></button>
        </form>
        <!-- Login form End -->
      </div>
    </div>
  </div>
</body>

</html>