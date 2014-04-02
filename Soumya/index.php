<?php /* Sample page */ ?>
<html>
	<head>
		<title>Soumyas page</title>
		<meta charset="UTF-8"/>
		<meta name="author" content="Shivam Chaturvedi -- The Smarter Techie"/>
		<meta name="keywords" content="design for the new blogging platform"/>
		<link rel="stylesheet" href="css/main.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript">
		$(function() {
var showChar = 120, showtxt = "more", hidetxt = "less";
$('.more').each(function() {
var content = $(this).text();
if (content.length > showChar) {
var con = content.substr(0, showChar);
var hcon = content.substr(showChar, content.length - showChar);
var txt= con +  '<span class="dots">...</span><span class="morecontent"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="moretxt">' + showtxt + '</a></span>';
$(this).html(txt);
}
});
$(".moretxt").click(function() {
if ($(this).hasClass("sample")) {
$(this).removeClass("sample");
$(this).text(showtxt);
} else {
$(this).addClass("sample");
$(this).text(hidetxt);
}
$(this).parent().prev().toggle();
$(this).prev().toggle();
return false;
});
});
</script>
<style type="text/css">
body{
font-family: Calibri, Arial;
margin: 0px;
padding: 0px;
}
.more {
width: 400px;
background-color: #f0f0f0;
margin: 10px;
}
.morecontent span {
display: none;
}
</style>
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
						<li class="item">Item 3</li>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<div class="more">How good is the education being provided by an academic Institution? While there can be sophesticated ways of assessing the quality (e.g. by having peope who understand education and its goals assess the quality by looking at the faculty, courses, method of teaching, etc.) often quality of the overall education is assessed by how well their graduates do in their careers. And an indicator of this is how good a start the graduates get, i.e. the placement record of Institute.
				Most good institutions have good placement records. While good institutions have good placement/careers statistics, there has been a perpetual debate/doubt whether this outcome is due to the fact that these institutes, being higly selective, take in the brightest of the students (if you take the top 5% of the students, of course they will do well – the argument goes), or whether it is due to the value of education they provide.  All of us academics in top institutions believe that while high quality of intake has a role to play, the quality of education provided at these institutions is the key determining factor in the success of these students. Unfortunately, this point cannot be supported by data as it is not possible get the desired data (e.g. average students taken in the top institutions and provided good education and then seeing how they do.)
				At IIIT Delhi, as an Institute which has now evolved into a sought-after, high quality institution, we have a limited data from the first batch to shed some light to this debate. In 2008 the Institute was started – I was appointed the Director (employee #001) in Aug, and we had to start the new session in Sept. As all the admissions were over, the “best” students were already gone – even if they were not, why will they join an Institute that just started and had no faculty or facilities. In any case, we did an entrance test with an eligibility criteria being 60% in class XII.  About 350 students applied, finally around 250 or so appeared, of which we selected 60 – and many of those who were offered did not accept it. Effectively, almost one in every three students who wanted was admitted.   (Now that we have established ourselves as a top Institution,  of those who apply – and only those above 80% in class XII can apply – about 6% are selected.)
				</div>
				<!-- 	wrapper will contain the main article section plus the side bar.
						So, this in effect wraps the content box and the sidebar. -->
				<br/><br/><br/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<img src="Books-06.jpg" style="float: left;height: 300px; width: 300px;"/>
				<p style="padding: 0; margin: 0;">
				This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.This is supposed to be a very long text somewhere that you should not bother to read anyhow. well that doesn't really matter because I will writ it anyway...so please sutt up.
				</p>
				
				
			</div>
			<div id="footer">
				<!-- -->
			</div>
		</div>
	</body>
</html>