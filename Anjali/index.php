<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="type/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
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
				<div class="container">
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