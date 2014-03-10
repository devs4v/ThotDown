<?php /* Sample page */ ?>
<html lang="en">
<html>
	<head>
		<title>THOTDOWN-Welcome Page</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css"/>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<!-- Head section. Can contain the toolbar or the nav bar if needed or can be merged with the main content area-->
				<div id="main_logo">
					<img src="pics/logo.png"/>
				</div>
				<div id="HeaderContent_area">
					<ul id="menu">
						<li class="item"><span>Home</span></li>
						<li class="item"><span>About Us</span></li>
						<li class="item"><span>Events</span></li>
						<li class="item"><span>Contact Us</span></li>
					</ul>
				</div>
			</div>
					<div id="da-slider" class="da-slider">
						<div class="da-slide">
							<h2>THOT-DOWN</h2>
							<h1>whatever comes to your mind , just Jot Down</h1>
							<p>This is a blogging platform where you can work more interactively.</p>
							<a href="#" class="da-link">More Info</a>
							<div class="da-img"><img src="1.jpg" style="height:300px; width:400px;" alt="images/1.png"/></div>
						</div>
						<div class="da-slide">
							<h2>Easy management</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/2.png" alt="image01" /></div>
						</div>
						<div class="da-slide">
							<h2>Revolution</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/3.png" alt="image01" /></div>
						</div>
						<div class="da-slide">
							<h2>Quality Control</h2>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<a href="#" class="da-link">Read more</a>
							<div class="da-img"><img src="images/4.png" alt="image01" /></div>
						</div>
						<nav class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</nav>
					</div>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					var $slider	= $('#da-slider');
					
					// initialize the slider
					$slider.cslider();
					
					// example how to go to page 3 when clicking on a link
					$('#testSlide3').on( 'click', function( event ) {
					
						$('#da-slider').cslider( 'page', 2 );
						return false;
					
					} );
				
				});
			</script>


			<div id="wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="cover">
					<div id="text">
						<h1> "Got Some Idea, Why Don't You Note It Down."</h1>
					</div>
				</div>
				
				<div id="login-space">
				<!-- the sign in box -->
				<form name ="login-form" class="login-form" action="" method="post">
					<div id="login-box">
						<div class="login-head">
							<h1>Login Form</h1>
							<span>Fill out the form below to login to my super awesome imaginary control panel.</span>
						</div>
	
						<div class="login-content">
							<input name="username" type="text" class="input username" placeholder="Username" />
							<!-- <div class="user-icon"></div> -->
							<input name="password" type="password" class="input password" placeholder="Password" />
							<!-- <div class="pass-icon"></div> -->		
						</div>

					<div class="login-footer">
						<input type="submit" name="submit" value="Login" class="button" />
						<input type="submit" name="submit" value="Register" class="register" />
					</div>
	
				</form>

				</div>
				<div class="gradient"></div>

					</div>
				<div id = "sign-up">
					<div id="signup-box">
						<button type="button" class="signup_button"> Get Your Blog Now </button>
					</div>
				</div>

				<div id ="writing-space">
					<div id = "text2">
						<h1>How to specify where ?</h1>
						<p>There are many different ways to specify the target position.</p>
						<ul>
							These are:
								<li>A raw number</li>
								<li>A string('44', '100px', '+=30px', etc )</li>
								<li>A DOM element (logically, child of the scrollable element)</li>
								<li>A selector, that will be relative to the scrollable element</li>
								<li>The string 'max' to scroll to the end.</li>
								<li>A string specifying a percentage to scroll to that part of the container (f.e: 50% goes to to the middle).</li>
								<li>A hash { top:x, left:y }, x and y can be any kind of number/string like above.</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="footer-container">
					<div class="navigation">
				
						<a class = "buttons" href = meh>Help</a>
						
						<a class = "buttons" href = meh >Terms</a>
						
						<a class = "buttons" href = meh >About Us</a>
						
						<a class = "buttons" href = bleh >Licence</a>
						
						<a class = "buttons" href = Python >Contact</a>
						
					</div>
					<div id = "copyright_line"> Copyright &copy; 2014 The Smarter Techies </div>
				</div>
			</div>
		</div>
	</body>
</html>


