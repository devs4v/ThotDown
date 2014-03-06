<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
<<<<<<< HEAD
		<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

<script>
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});	
</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
=======
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
>>>>>>> new login
		<link rel="stylesheet" href="css/main.css"/>

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
						<button type="button" class="button"> Sign up </button>
					</div>
				</div>
			</div>
			<div id = "footer_container">
				<div class = "ContentArea">
					<p class="Connect">
					<ul id="SocialLinks">
						<li><a href="mailto:ujjainia.2906@gmail.com">EMAIL</a></li>
						<li>TWITTER</li>
						<li><a href="http://facebook.com/anjali.ujjainia5">FACEBOOK</a></li>
					</ul>
				</div>
			</div>
			<div id="footer">
				<!-- -->
			</div>
		</div>
	</body>
</html>