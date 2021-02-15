<?php
session_start(); //starts the session

if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
{
    date_default_timezone_set('Asia/Manila');
    $fullname = ($_POST['fullname']);
    $time = strftime("%r");//time
    $period = strftime("%p");//time
    $date = strftime("%B %d, %Y");//date
    $emailAdd = ($_POST['emailAdd']);
    $subject = ($_POST['subject']);
    $content = ($_POST['content']);
    require 'connection.php';
    //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server

    
    mysqli_query($con, "INSERT INTO messages (fName, emailAdd, date, time, subject, content) VALUES
    ('$fullname','$emailAdd','$date','$time','$subject','$content')"); //SQL query
    header("location: ContactUs.php");
}

?>