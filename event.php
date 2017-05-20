<?php
session_start();

include_once 'dbconnect.php';

echo "<h1>Events</h1>";
    $result = mysqli_query($con, "SELECT * FROM 'testdb.events'");
    
echo ".$result";
    if ($row = mysqli_fetch_array($result)) {
  $name = $row['event_name'];
  $email = $row['event_desc'];
  $website = $row['event_date'];
  
  $name = htmlspecialchars($row['name'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  
  echo "  <div style='margin:30px 0px;'>
      Name: $name<br />
      Email: $email<br />
      Website: $website<br />
    </div>
  ";
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }

?>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="event">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>
                                        					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>-->
