<?php /* Sample page */ ?>
<html>
	<head>
		<title>Qtiyappa</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Soumya Sharma - The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" href="css/publicblog.css"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#accordion" ).accordion({
event: "click hoverintent"
});
});
/*
* hoverIntent | Copyright 2011 Brian Cherne
* http://cherne.net/brian/resources/jquery.hoverIntent.html
* modified by the jQuery UI team
*/
$.event.special.hoverintent = {
setup: function() {
$( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
},
teardown: function() {
$( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
},
handler: function( event ) {
var currentX, currentY, timeout,
args = arguments,
target = $( event.target ),
previousX = event.pageX,
previousY = event.pageY;
function track( event ) {
currentX = event.pageX;
currentY = event.pageY;
};
function clear() {
target
.unbind( "mousemove", track )
.unbind( "mouseout", clear );
clearTimeout( timeout );
}
function handler() {
var prop,
orig = event;
if ( ( Math.abs( previousX - currentX ) +
Math.abs( previousY - currentY ) ) < 7 ) {
clear();
event = $.Event( "hoverintent" );
for ( prop in orig ) {
if ( !( prop in event ) ) {
event[ prop ] = orig[ prop ];
}
}
// Prevent accessing the original event since the new event
// is fired asynchronously and the old event is no longer
// usable (#6028)
delete event.originalEvent;
target.trigger( event );
} else {
previousX = currentX;
previousY = currentY;
timeout = setTimeout( handler, 100 );
}
}
timeout = setTimeout( handler, 100 );
target.bind({
mousemove: track,
mouseout: clear
});
}
};
</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<!-- Head section. Can contain the toolbar or the nav bar if needed or can be merged with the main content area-->
				<div id="main_logo">
					<img src="pics/thotDownLogo.png" id="logo_header" style="height:25px; width:20px;"/>
				</div>
				<div id="HeaderContent_area">
					<ul id="menu">
						<li class="item"><span class="itemh"><a  href="#" style="text-decoration: none;color:#FFF;" onMouseOver="this.style.color='yellow'"
   onMouseOut="this.style.color='#FFF'">DashBoard</a></span></li>
						<li class="item"><span class="itemh"><a  href="#" style="text-decoration: none;color:#FFF;" onMouseOver="this.style.color='yellow'"
   onMouseOut="this.style.color='#FFF'">About Us</a></span></li>
						<li class="item"><span class="itemh"><a  href="#" style="text-decoration: none;color:#FFF;" onMouseOver="this.style.color='yellow'"
   onMouseOut="this.style.color='#FFF'">Events</a></span></li>
						<li class="item"><span class="itemh"><a  href="#" style="text-decoration: none;color:#FFF;" onMouseOver="this.style.color='yellow'"
   onMouseOut="this.style.color='#FFF'">signout</a></span></li>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<div id="content">
					<div id="nonsidebar"> 
						<div class="content-heading">Qtiyappa</div>
						<h4 class="content-writeup">TVF : India's 1st Online Youth Entertainment Network<br>
						TheViralFever.Com is India's 1st Organized OnlineTV, where you can watch Regular Shows created especially for the young audience.<br>
						SUBSCRIBE for your weekly dose of Humor & Q-Tiyapa.</h4>
						<div class="videos-border">
							<div class="videos">
								<iframe width="500" height="250" src="//www.youtube.com/embed/qR9y6hkXjDs?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						</br></br></br>
						<div class="videos-border">
							<div class="videos">
								<iframe width="500" height="250" src="//www.youtube.com/embed/ZYDGmkjK9pI?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						</br></br></br>
						<h4 class="content-writeup">Published on Jun 18, 2013<br>
						Download Lorde's album "Pure Heroine (Extended Edition)" featuring "Royals" now:<br>
						iTunes: <a href="http://smarturl.it/PureHeroineExtended">http://smarturl.it/PureHeroineExtended</a><br>
						Amazon: <a href="http://smarturl.it/PureHeroineExtendAZ">http://smarturl.it/PureHeroineExtendAZ</a><br>
						</br>
						Music video by Lorde performing Royals. (C) 2013 Universal Music NZ Ltd.<br>
						You can also watch the video at: <a href="http://www.youtube.com/watch?feature=player_detailpage&v=nlcIKh6sBtc">http://www.youtube.com/watch?feature=player_detailpage&v=nlcIKh6sBtc</a><br></h4>
						<div class="videos-border">
							<div class="videos">
								<iframe width="500" height="250" src="//www.youtube.com/embed/nlcIKh6sBtc?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						</br></br></br>
					</div>
					<div id="sidebar" style="width:275px;hight:150px;">
						</br></br>
						<h2> Archive</h2>
						<div id="accordion">
							<h5>Section 1</h5>
								<div>
								<p>
								This is the first post of your blog........
								This is the first post of your blog........
								</p>
								</div>
							<h5>Section 2</h5>
								<div>
								<p>
								Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
								purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
								velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
								suscipit faucibus urna.
								</p>
								</div>
							<h5>Section 3</h5>
								<div>
								<p>
								Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
								Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
								ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
								lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
								</p>
								<ul>
								<li>List item one</li>
								<li>List item two</li>
								<li>List item three</li>
								</ul>
								</div>
							<h5>Section 4</h5>
								<div>
								<p>
								Cras dictum. Pellentesque habitant morbi tristique senectus et netus
								et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
								faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
								mauris vel est.
								</p>
								<p>
								Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
								Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
								inceptos himenaeos.
								</p>
								</div>
						</div>
						<h2> Contributors </h2>
						</br></br></br></br></br></br></br>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="container">
					<div class="navigation">
				
						<a class = "buttons" href = "#">Help</a>
						
						<a class = "buttons" href = # >Terms</a>
						
						<a class = "buttons" href = # >About Us</a>
						
						<a class = "buttons" href = # >Licence</a>
						
						<a class = "buttons" href = # >Contact</a>
						
					</div>
					<div id = "copyright_line"> Copyright &copy; 2014 The Smarter Techies </div>
				</div>
			</div>
		</div>
	</body>
</html>