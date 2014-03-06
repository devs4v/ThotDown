<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main1.css"/>

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
			<div id="login-wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="login-cover">
					<div id="login-text">
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
				
			</div>
			<div id="signup-wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				
				<div id="signup-cover">
					<div id="signup-text">
						<h1> "Got Some Idea, Why Don't You Note It Down."</h1>
					</div>
				</div>
				
				<div id="signup-space">
				<!-- the sign in box -->
				<form name ="signup-form" class="signup-form" action="" method="post">
					<div id="signup-box">
						<div class="signup-head">
							<h1>Signup Form</h1>
							<span>Fill out the form below to get your own space to jot your thoughts down</span>
						</div>
	
						<div class="signup-content">
							<input name="firstname" type="text" class="input firstname" placeholder="FirstName" />
							<!-- <div class="user-icon"></div> -->
							<input name="lastname" type="text" class="input lastname" placeholder="LastName" />
							<input name="email id" type="email" class="input email" placeholder="Email ID" />
							<input name="username" type="text" class="input username" placeholder="UserName" />
							<input name="password" type="password" class="input password" placeholder="Password" />
							<input name="confirm-password" type="password" class="input password" placeholder="Confirm Password" />
							<!-- <div class="pass-icon"></div> -->
							

						</div>

					<div class="signup-footer">
						<input type="submit" name="submit" value="Create My Blog" class="button" />
					</div>
	
				</form>

				</div>
				<div class="gradient"></div>

					</div>
				
			</div>
			<div id="footer">
				<div class="container" >
					<div class="navigation">
						<a class="buttons" href="#">Help</a>
						<a class="buttons" href="#" >Terms</a>
						<a class="buttons" href="#" >About Us</a>
						<a class="buttons" href="#" >Licence</a>
						<a class="buttons" href="#" >Contact</a>
					</div>
					<div id = "copyright_line"> Copyright &copy; 2014 The Smarter Techies </div>
				</div>
			</div>
		</div>
	</body>
</html>