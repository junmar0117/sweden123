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

    $name = 'aa';//($_GET['firstname']) . " " . ($_GET['lastname']);//name
    $contactNum = '123';//($_GET['phonenumber']);//contact number
    $address = 'aa';//($_GET['address']) . ", " . ($_GET['city']) . ", " . ($_GET['state']) . ", " . ($_GET['zipcode']);//address
    $checkIn = //($_GET['check-in']);//check in date
    $checkOut = //($_GET['check-out']);//check out date
    $adultNum = 1;//($_GET['adults']);
    $childNum = 1;//($_GET['children']);
    $roomNum=1;
    $cardName = 'dw';//($_GET['cardholder']);
    $cardNum = 11;//($_GET['cardnumber']);
    $cardcvv =11;// ($_GET['cvv']);
    $cardExp = '2';//($_GET['expiration']);
    $roomPrice = 10;
    $discount;
    $totalAmtDue;



    $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
    // foreach($_POST['c'] as $each_check){ //gets the data from the checkbox
    //    if($each_check !=null ){ //checks if the checkbox is checked
    //    $decision = "yes"; //sets the value
    //    }
    //}
    //mysqli_query($con, "DECLARE @newID INT");
    mysqli_query($con, "INSERT INTO guest (guest_name, guest_phone, guest_address, guest_card_name, guest_card_num, 
        guest_card_exp, guest_card_cvv, adults, children) VALUES('$name','$contactNum','$address','$cardName','$cardNum', 
        '$cardcvv','$cardExp','$adultNum','$childNum')");//sql query to populate guest table

    $last_id = mysqli_insert_id($con);//get guest id
    mysqli_query($con, "INSERT INTO booking (guest_ID, room_ID, checkIn, checkout) VALUES('$last_id','$roomNum','$checkIn','$checkOut')"); //SQL query
    //header("location: index.php");
    //Print '<script>window.location.assign("index.php");</script>';
?>