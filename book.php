<?php
// class CustomerInfo {
//   protected $name;
//   protected $contactNum;
//   protected $address;
//   protected $checkIn;
//   protected $checkOut;
//   protected $adultNum;
//   protected $childNum;

//   function __construct($name, $contactNum, $address, $checkIn, $checkOut, $adultNum, $childNum){
//     $this->name = $name;
//     $this->contactNum = $contactNum;
//     $this->address = $address;
//     $this->checkIn = $checkIn;
//     $this->checkOut = $checkOut;
//     $this->adultNum = $adultNum;
//     $this->childNum = $childNum;
    
    
//   }

// }

// class booking extends CustomerInfo{
  
// }


// $details = ($_POST['details']);
  // $time = strftime("%X");//time
  // $date = strftime("%B %d, %Y");//date
  // $decision ="no";

  $name = ($_GET['firstname']) . " " . ($_GET['lastname']);//name
  $contactNum = ($_GET['phonenumber']);//contact number
  $address = ($_GET['address']) . ", " . ($_GET['city']) . ", " . ($_GET['state']) . ", " . ($_GET['zipcode']);//address
  $checkIn = ($_GET['check-in']);//check in date
  $checkOut = ($_GET['check-out']);//check out date
  $adultNum = ($_GET['adults']);
  $childNum = ($_GET['children']);
  $roomNum=1;
  $cardName = ($_GET['cardholder']);
  $cardNum = ($_GET['cardnumber']);
  $cardcvv = ($_GET['cvv']);
  $cardExp = ($_GET['expiration']);
  $email = ($_GET['email']);
  // $roomPrice = 10;
  // $discount;
  // $totalAmtDue;


  //require 'connection.php';
  $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_connect_error()); //Connect to server
  // foreach($_POST['c'] as $each_check){ //gets the data from the checkbox
  //    if($each_check !=null ){ //checks if the checkbox is checked
  //    $decision = "yes"; //sets the value
  //    }
  //}
  //mysqli_query($con, "DECLARE @newID INT");
  mysqli_query($con, "INSERT INTO guest (guest_name, guest_phone, guest_address, guest_card_name, guest_card_num, 
      guest_card_exp, guest_card_cvv, adults, children, email) VALUES('$name','$contactNum','$address','$cardName','$cardNum', 
      '$cardExp','$cardcvv','$adultNum','$childNum','$email')");//sql query to populate guest table

  $last_id = mysqli_insert_id($con);//get guest id
  mysqli_query($con, "INSERT INTO booking (guest_ID, room_ID, checkIn, checkout) VALUES('$last_id','$roomNum','$checkIn','$checkOut')"); //SQL query
  //header("location: index.php");
  Print '<script>window.location.assign("BookNow.php");</script>';
?>