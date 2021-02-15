<?php
    session_start(); //starts the session
    
    if($_SESSION['user']){ //checks if user is logged in
    }else{
      header("location:index.php "); // redirects if user is not logged in
    }
    
    $user = $_SESSION['user']; //assigns user value
    $id_exists = false;
  ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/contact-us.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Contact Us | The Grand Sweden Hotel</title>
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
      <li><a href="scripts/logout.php">Logout</a></li>
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
        <h1>The Message</h1>
       
        <?php
            $id = $_GET['id'];
            $count="SELECT *  FROM messages where id=?";
            require 'connection.php';
            //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
            if($stmt = $con->prepare($count))   {
              $stmt->bind_param('i',$id);
              $stmt->execute();
              $result = $stmt->get_result();
              echo "<b>MESSAGE NO. : </b>".$id."<br>";
              $row=$result->fetch_object();
                        
            //Print content

                Print '<td align="center">'."<b>SENDER: </b>" . $row->fName . "</td><br>";
                Print '<td align="center">'."<b>EMAIL ADDRESS : </b>" . $row->emailAdd . "</td><br>";
                Print '<td align="center">'."<b>EMAIL ADDRESS : </b>" . $row->subject . "</td><br> <br>";
                Print '<td align="center">'.$row->content. "</td>";
          }
          ?>
     


      </div>
    
      


    </div>
  </div>


</html>