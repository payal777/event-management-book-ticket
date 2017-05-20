<?php
session_start();
include_once 'dbconnect.php';

$event_id=$_GET['id'];
$_SESSION['event_id']=$event_id;

$result = mysqli_query($con, "SELECT * FROM event where id=$event_id") or die("no query");
    while ($row = mysqli_fetch_array($result))
            {
            $event_title=$row['event_name'];
            $event_desc=$row['description'];
            $event_start_date=$row['event_start_date'];
            $event_end_date=$row['event_end_date'];
            $event_ticket_price=$row['ticket_prize'];
            $event_terms=$row['terms_conditions'];
            $event_venue=$row['venue'];
            $event_contact_1=$row['contact_1'];
            $event_contact_2=$row['contact_2'];
            $event_contact_3=$row['contact_3'];
            $event_organizer=$row['event_organizer'];
            $_SESSION['terms']=$event_terms;    
            $_SESSION['event_name']=$event_title;
            $_SESSION['event_desc']=$event_desc;
            $_SESSION['event_start_date']=$event_start_date;
            $_SESSION['event_end_date']=$event_end_date;
            $_SESSION['event_venue']=$event_venue;
            $_SESSION['event_contact_1']=$event_contact_1;
            $_SESSION['event_contact_2']=$event_contact_2;
            $_SESSION['event_contact_3']=$event_contact_3;
            $_SESSION['event_organizer']=$event_organizer;?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Booking Management</title>
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
	<div style=" background-color: #F5F5F5;
    padding: 20px;
    margin: 20px;">
	<h1 style="color:#ff4c4c;"><?php echo $row['event_name'];?></h1>
        <h3><?php echo $row['description'];?></h3>
	<h4>Event Start Date: <?php echo $row['event_start_date'];?></h4>
	<h4>Event End Date:  <?php echo $row['event_end_date'];?></h4>
	<h4>Ticket Price Per Person:<?php echo $row['ticket_prize'];?></h4>
        <h4>Venue:<?php echo $row['venue'];?></h4>
    <a class="btn btn-primary" href="login.php?id=<?php echo $event_id;?>">Book Tickets</a>
           <?php 
                                               }?>
    </div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

