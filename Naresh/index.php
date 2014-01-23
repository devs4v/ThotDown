<?php /* Sample page */ ?>
<html>
	<head>
		<title>Madhavs Page</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Naresh Aditya Madhav -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<!-- Head section. Can contain the toolbar or the nav bar if needed or can be merged with the main content area-->
				<div id="navbar">
					<ul id="menu">
						<li class="item">
							<div>Item 1</div>
							<ul class="submenu">
								<li class="submenu-item">Submenu1 item1</li>
								<li class="submenu-item">Submenu1 item2</li>
							</ul>
						</li>
						<li class="item">
							<div>Item 2</div>
							<ul class="submenu">
								<li class="submenu-item">Submenu2 item1</li>
								<li class="submenu-item">Submenu2 item2</li>
								<li class="submenu-item">Submenu2 item3</li>
							</ul>
						</li>
						<li class="item">
							<div>Item 3</div>
							<ul class="submenu">
								<li class="submenu-item">Submenu3 item1</li>
								<li class="submenu-item">Submenu3 item2</li>
								<li class="submenu-item">Submenu3 item3</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<img id="headerimage" src="images/HeaderLogo-0.jpg" style="height: 100px;width: 100px;"/>
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
			</div>
			<div id="footer">
				<!-- Will be having the copyright stuff and some links like about us.  -->
			</div>
		</div>
	</body>
</html>