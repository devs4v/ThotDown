<?php
/* beta version of ThotDown
	@author: Shivam Chaturvedi
*/
$docroot = "/ThotDown/beta/";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>ThotDown | Beta</title>
		<meta name="author" content="Shivam Chaturvedi"/>
		<meta name="description" content="ThotDown -- beta"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- HTML5 shim, for IE6-8 support of HTML elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	    <link href="css/bootstrap-responsive.css" rel="stylesheet">
		<!-- fav and touch icons -->
    	<link rel="shortcut icon" type="image/x-icon" href="img/ico/favicon.ico"/>
	</head>
	
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a href="<?php echo $docroot;?>"><img class="pull-left brand-image" src="img/ico/thotDownLogoBeta.jpg"/></a>
					<a class="brand" href="<?php echo $docroot;?>">ThotDown</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="<?php echo $docroot;?>">Home</a></li>
							<li><a href="<?php echo $docroot;?>dashboard/">Dashboard</a></li>
							<li><a href="<?php echo $docroot;?>about/">About Us</a></li>              
						</ul>
						<a class="btn btn-primary pull-right" href="<?php echo $docroot;?>signin/" style="margin-top:16px;">Sign In</a>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

	<div class="container">
		<div class="hero-unit">
			<h1 class="pull-left">ThotDown</h1>&nbsp;<h3 style="color: crimson;margin-top: -20px;">beta</h3>
			<p style="clear:both;">This page is based on Twitter Bootstrap's starter template file for a "Basic marketing site," <a href="http://twitter.github.com/bootstrap/examples.html">which is found in their examples</a>.</p>
			<p>These files have been updated to Twitter Bootstrap version 2.02. <a href="https://github.com/twitter/bootstrap/wiki/Changelog">Read more here</a>.</p>
		</div>

      <div class="row">
        <div class="span4">
          <h2>Setup Notes</h2>
           <p>Get your markup, CSS, and JavaScript organized and linked up!</p>
          <p><a class="btn" href="setup-notes.html">Go there &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Navbar Examples</h2>
           <p>Suggestions and code for three ways to setup your navbar:</p>
           	<ul>
           		<li>fixed-top</li>
           		<li>static full-width</li>
           		<li>static inside container</li>
           	</ul>
          <p><a class="btn" href="navbar-examples.html">Go there &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Next Up: Tabs & Pills</h2>
          <p>Coming soon!</p>
        </div>
      </div><!-- end row 1 -->

      <hr>


    </div> <!-- /container -->

    
		<footer>
			
		</footer>
		<!-- All scripts --><!-- Placed at the end of the document so the pages load faster -->
    	<script src="js/jquery.js"></script>
	</body>
</html>