<?php
session_start();
include_once 'dbconnect.php';

if (!(isset($_SESSION['usr_id']))) {
    header("Location: index.php");
}

$username = $_SESSION['usr_name'];
$eventid = $_SESSION['event_id'];
$eventname = $_SESSION['event_name'];
$useremail = $_SESSION['email'];
$useraddress = $_SESSION['address'];
$usernumber=$_SESSION['user_number'];
$terms = $_SESSION['terms'];
$no_of_tickets = $_SESSION['no_of_tickets'];
$total_price = $_SESSION['total_price'];
$eventdesc=$_SESSION['event_desc'];
$event_start_date= $_SESSION['event_start_date'];
$event_end_date=$_SESSION['event_end_date'];
        $venue=$_SESSION['event_venue'];
        $event_contact_1=$_SESSION['event_contact_1'];
        $event_contact_2=$_SESSION['event_contact_2'];
        $event_contact_3=$_SESSION['event_contact_3'];
        $event_organizer=$_SESSION['event_organizer'];
        
// CHart Type
$cht = "qr";
// CHart Size
$chs = "250x250";
// CHart Link
// the url-encoded string you want to change into a QR code
$chl = $username;
// CHart Output Encoding (optional)
// default: UTF-8
$choe = "UTF-8";
$qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Ticket Booking</title>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    </head>
    <body style="width:80%;
          margin-left:auto;
          margin-right:auto;">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Event Management</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['usr_id'])) { ?>
                            <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                            <li><a href="logout.php">Log Out</a></li>
                        <?php } else { ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Sign Up</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="padding:4%;"> 
            <div style="text-align: center;">
                <h4>Dear<b><?php echo "\n" . $username ?>, </b>Thank you for booking tickets with us.</h4>
            <p>You have booked <?php echo"\n".$no_of_tickets?> tickets.</p>
            <p>Your booking cost Rs:<?php echo "\n".$total_price?></p>
            <h4><b><u>Summary</u></b></h4>
            </div>
        <div style="border: 1px solid green ;
             -webkit-box-shadow: 0 10px 6px -6px #777;
             -moz-box-shadow: 0 10px 6px -6px #777;
             box-shadow: 0 10px 6px -6px #777;
             padding:2%;margin: 1%;">
            <p><b>Event Name:</b><?php echo "\n" . $eventname ?></p>
            <p><b>More about Event:</b><?php echo "\n" . $eventdesc ?></p>
            <p><b>Event Start Date:</b><?php echo "\n" . $event_start_date ?></p>
            <p><b>Event End Date:</b><?php echo "\n" . $event_end_date ?></p>
            <p><b>Venue:</b><?php echo "\n" . $venue ?></p>
            <p><b>Contact Us:</b><?php echo "\n" . $event_contact_1 ?></p>
            <p><b>Alternate Contact:</b><?php echo "\n".$event_contact_2?></p>
            <p><b>Terms and Condition:</b><?php echo "\n" . $terms ?></p>
        </div>
        <div style="border: 1px solid green ;
             -webkit-box-shadow: 0 10px 6px -6px #777;
             -moz-box-shadow: 0 10px 6px -6px #777;
             box-shadow: 0 10px 6px -6px #777;
             padding:2%;margin: 1%;">
            <h4><b><u>Shipping Address</u></b></h4>
            <p><b>Name:</b><?php echo"\n" . $username ?></p>
            <p><b>Phone:</b><?php echo"\n".$usernumber?></p>
            <p><b>Email:</b><?php echo"\n".$useremail?></p>
            <p><b>Address:</b><?php echo"\n".$useraddress?></p>
            <img src="<?php echo $qrcode ?>" alt="My QR code">
        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



