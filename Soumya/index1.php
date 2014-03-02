<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
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
			<div id="wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				<div id="cover">
					<div id="text">
						<H1> Sign-Up for a new experience!<H1>
					</div>
				</div>
				<div id="signup-space">
				<!-- the sign in box -->
					<div id="signup-box">
						<form id="signup">
							<h1>Sign Up!</h1>
							<p><div class="signup-index">  First name: </div>
							<div class="signup-field"> <input type="text" value="first name" name="firstname"></div></p><br>
							<div class="signup-index">  Last name: </div>
							<div class="signup-field"> <input type="text" value="last name" name="lastname"></div><br>
							<div class="signup-index">  E-mail ID: </div>
							<div class="signup-field"> <input type="text" value="email id" name="email id"></div><br>
							<div class="signup-index">  User Name: </div>
							<div class="signup-field"> <input type="text" value="user name" name="username"></div><br>
							<div class="signup-index">  Password: </div>
							<div class="signup-field"> <input type="password" value="pass" name="password"></div><br>
							<div class="signup-index">  Confirm Password: </div>
							<div class="signup-field"> <input type="password" value="pass" name="confirm password"></div><br>
							<div class="signup-index"><input type="submit" value="Submit"></div>
							<div class="signup-index"><input type="reset" value="Reset"></div><p class ="submit">
						</form>
					</div>
				</div>
			</div>
			
			<div id="sign-up">
				<form>
					<div class="signup-index">  First name: </div>
					<div class="signup-field"> <input type="text" value="first name" name="firstname"></div><br>
					<div class="signup-index">  Last name: </div>
					<div class="signup-field"> <input type="text" value="last name" name="lastname"></div><br>
					<div class="signup-index">  E-mail ID: </div>
					<div class="signup-field"> <input type="text" value="email id" name="email id"></div><br>
					<div class="signup-index">  User Name: </div>
					<div class="signup-field"> <input type="text" value="user name" name="username"></div><br>
					<div class="signup-index">  Password: </div>
					<div class="signup-field"> <input type="password" value="pass" name="password"></div><br>
					<div class="signup-index">  Confirm Password: </div>
					<div class="signup-field"> <input type="password" value="pass" name="confirm password"></div><br>
					<div class="signup-index"><input type="submit" value="Submit"></div>
					<div class="signup-index"><input type="reset" value="Reset"></div>

				</form>
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
	</body>
</html>