<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Rock a Music Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rock Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>
	 <form action="index.php" method="post">
	<!-- banner start here -->
	<div class="agileinfo-main">
		<div class="slider">
			<script src="js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 1
				  $("#slider1").responsiveSlides({
					 auto: true,
					 nav: true,
					 speed: 500,
					 namespace: "callbacks",
				  });
				});
			</script>
			<ul class="rslides" id="slider1">
				<li>
					<div class="banner">
						<h3>Music Concert</h3>
					</div>
				</li>
				<li>
					<div class="banner banner2">
						<h3>Tracking </h3>
					</div>
				</li>
				<li>
					<div class="banner banner3">
						<h3>Drama </h3>
					</div>
				</li>
			</ul>
		</div>	
		<div class="agileinfo-header">
			<div class="container">
				<div class="agile-logo">
					<h1><a href="index.html"><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Event Management</a></h1>
				</div>
				<div class="agileits-w3layouts-icons">
					<div class="social-icon">
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>	    
		</div>
		<!-- navigation start here -->
		<div class="top-nav">
			<span class="menu">Menu</span>	
			<ul class="w3l">
				<li><a class="active" href="index.html"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
				<li><a href="about.html"><i class="glyphicon glyphicon-user"></i><span>About</span></a></li>
				<li><a href="blog.html"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
				<li><a href="codes.html"><i class="glyphicon glyphicon-picture"></i><span>Short Codes</span></a></li>
				<li><a href="contact.html"><i class="glyphicon glyphicon-envelope"></i><span>Contact</span></a></li>
			</ul>
			<!-- script-for-menu -->
			<script>
			   $( "span.menu" ).click(function() {
				 $( "ul.w3l" ).slideToggle( 300, function() {
				 // Animation complete.
				  });
				 });
			</script>
			<!-- //script-for-menu -->
		</div>	
	</div>
	<!-- navigation end here -->
	<!-- banner end here -->

	<!-- //banner end here --> 
	<!-- welcome -->
	<div class="welcome agileits">
		<div class="container">
			<h2 class="agile-title">Welcome To Event Management</h2>
			<p>We bring experience and creativity together to deliver events that surpass expectations through the integrated use of our team’s unique set of skills. We operate with integrity, energy and attention to detail.</p>
			<div class="welcome-agileinfo">
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/img1.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Our New Drama Event</h4>
							<p>Most Waiting Drama is coming soon.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/img2.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Rachi Boys Live Concert</h4>
							<p>Watch Rachi Boys Live Concert.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome --> 
	<!-- events -->
         <?php
session_start();

include_once 'dbconnect.php';
    $result = mysqli_query($con, "SELECT * FROM event") or die("no query");
    
    $result_array = array();
$data_array=array();
    while ($row = mysqli_fetch_assoc($result)) {
		$result_array[]= $row;
		array_push($data_array,$row);
		$event_id=$row['id'];
		$event_name=$row['event_name'];
		$event_desc=$row['description'];
		//echo $event_id . " " . $event_name  ." " . $event_name."<br>";
    }

		foreach($result_array as $key => $row)
		{
			foreach($row as $field => $value){
			 	 $recNew[$field][] = $value;
			}
		}

echo "<table>\n";

foreach ($recNew as $key => $values) // For every field name (id, name, last_name, gender)
{
    echo "<tr>\n"; // start the row
    echo "\t<td>" . $key . "</td>\n" ; // create a table cell with the field name
        foreach ($values as $cell) // for every sub-array iterate through all values
        {
           echo "\t<td>" . $cell . "</td>\n"; // write cells next to each other
        }
    echo "</tr>\n"; // end row

}

echo "</table>";

echo $result_array[0]['event_name'];

echo '<pre>';
print_r($data_array);
echo '</pre>';





?>

	<div class="events"> 
		<div class="container">
			<h3 class="agile-title">Events</h3> 
			<div class="events-info">
				<div class="col-md-6 event-grids">
				  <div class="w3layouts-text">
						<h4>10<span>June</span></h4>
						<h6><a href="index.html">Music Concert</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Enjoy the live music concert of Rachi Boys Live!!!!!!!!</p>
					<p><input style="color:black;"type="submit" value="Book Tickets"></p>
				</div>
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>20<span>June</span></h4>
						<h6><a href="index.html">Drama</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>The most waiting drama event is coming soon.Get Ready to watch it!!!!!!!!!</p>
					<p><input style="color:black;"type="submit" value="Book Tickets"></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //events --> 
	<!--- albums -->
	<!--- //albums --> 
	<!-- footer start here -->
	<div class="agilebg-footer">
		<div class="footer">
			<div class="container">
				<div class="footer-agileinfo">
					<div class="col-md-3 col-sm-3 footer-wthree-grid">
						<h3>Navigation</h3>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li> 
							<li><a href="blog.html">Blog</a></li>
							<li><a href="codes.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-5 footer-wthree-grid">
						<h3>Latest Tweet</h3>
						<div class="agileits-w3layouts-tweets">  
							<h5><i class="fa fa-twitter" aria-hidden="true"></i> About Tracking</h5> 
						</div>
						<p>Awesome.Had amazing Experience.</p>
					</div>
					<div class="col-md-4 col-sm-4 footer-wthree-grid">
						<h3>Keep In Touch</h3>
						<div class="ftr-icons">
							<div class="ftr-iblock">
								<span class="glyphicon glyphicon-map-marker">  </span>
							</div>
							<div class="ftr-text">
								<p>Deshpande nagar,Hubli</p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					   <div class="ftr-icons">
							<div class="ftr-iblock">
								<span class="glyphicon glyphicon-earphone">  </span>
							</div>
							<div class="ftr-text">
								<p>+333 222 23456</p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					   <div class="ftr-icons">
							<div class="ftr-iblock">
							   <span class="glyphicon glyphicon-envelope">  </span>
							</div>
							<div class="ftr-text">
								<p><a href="mailto:info@example.com">mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
					   </div>
					</div>
					<div class="clearfix"> </div>		
				</div>
			</div>
		</div>
	</div>
	<!-- //footer end here -->
	<!-- copy rights start here -->
	<div class="copy-right">
		<div class="container"> 
			<p>© 2017 Rock. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!-- //copy right end here -->  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
	</form>
</body>
</html>