<?php /* Sample page */ ?>
<html>
	<head>
		<title>Welcome here</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="js/ex4-cssmenu.js"></script>
		<link rel="stylesheet" href="css/ex4-cssmenu.css"/>
	</head>
	<body onload="init();">
		<div id="container">
			<div id="header">
				<!-- Head section. Can contain the toolbar or the nav bar if needed or can be merged with the main content area-->
				<div id="menuwrap">
					<ul id="menu">
						<li class="item"><span>Home</span></li>
						<li class="item">
							<span>Events</span>
							<ul class="submenu">
								<li class="submenu-item">Fashion Parade</li>
								<li class="submenu-item">Grammar Nazi</li>
								<li class="submenu-item">Binge</li>
								<li class="submenu-item">Captcha</li>
							</ul>
						</li>
						<li class="item"><span>About Us</span></li>
						<li class="item"><span>Contact Us</span></li>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
			</div>
			<div id="footer">
				<!-- -->
			</div>
		</div>
	</body>
</html>