<?php
session_start();
$e_id;
$e_id=$_GET['id'];
echo $e_id; 

//if (isset($_GET['id'])) {
    //$_SESSION['event_id'] = $_GET['id'];
//}

if(isset($_SESSION['usr_id'])!="") {
	header("Location: welcome.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) { 
//$e_id=$_GET['id'];
//echo $e_id;
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM members WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        $_SESSION['address']=$row['address'];
        $_SESSION['email']=$row['email'];
        $successmsg = "Login Successfully";
         header("Location: welcome.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }   
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
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
</html>
