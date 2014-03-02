<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
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
					<!---<a href=""/> --->
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
						<H1> "Got Some Idea, Why Don't You Note It Down."</H1>
					</div>
				</div>
				<div id="login-space">
				<!-- the sign in box -->
					<div id="login-box">
						<div id="login">
							<h1>Login</h1>
							<p><input type="email" placeholder="Username or Email" name="email"></p>
							<p><input type="password" placeholder="Password" name="password"></p>
							<p class ="submit">
							<input type="submit" value="Login"></p>
						</div>
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