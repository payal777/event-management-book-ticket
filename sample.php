<?php
session_start();


include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $lname= mysqli_real_escape_string($con, $_POST['lname']);
    $mnumber=mysqli_real_escape_string($con, $_POST['mnumber']);
    $address=mysqli_real_escape_string($con, $_POST['address']);
    $uname=mysqli_real_escape_string($con, $_POST['username']);
    
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
        $error = true;
        $lname_error = "Last Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        //$result = mysqli_query($con, "SELECT * FROM members WHERE username = '" . $uname. "' and email = '" . $email. "'");
        
        if(mysqli_query($con, "INSERT INTO testdb.members(name,email,password,lname,address,username,mnumber) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "','" . $lname . "','" . $address . "','" . $uname . "','" . $mnumber . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Book Your Tickets</a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="register.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Events</legend>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
  
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Last Name" required value="<?php if($error) echo $lname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($lname_error)) echo $lname_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Phone Number</label>
                        <input type="number" name="mnumber" placeholder="Phone Number" required value="<?php if($error) echo $mnumber; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($pnumber_error)) echo $pnumber_error; ?></span>
                    </div>
                             
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" placeholder="Enter Address" required value="<?php if($error) echo $address; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($address)) echo $address_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="username" placeholder="Enter Username" required value="<?php if($error) echo $uname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $username_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
               
                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
</div>
<script src="jquery-1.10.2.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
