<?php
$no_of_tickets=$_SESSION['no_of_tickets'];
$total_prize=$_SESSION['total_price'];
 $username = $_SESSION['usr_name'];
    $eventid=$_SESSION['event_id'];
    $eventname=$_SESSION['event_name'];
    $useremail=$_SESSION['email'];
    $useraddress= $_SESSION['address'];
    $terms=$_SESSION['terms'];


echo "Hi" .$username; 
        echo "No. of tickets:".$no_of_tickets;     
        echo "Your Booking cost is:".$total_prize;
        echo "Your tickets will send to address:".$useraddress;
        echo "Email will be send to:".$useremail;
        echo "Terms and condition:".$terms;
?>