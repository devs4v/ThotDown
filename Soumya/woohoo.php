<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="So Um Yeah"/>
		<!-- CSS -->
		<style type="text/css">
			.showmore, .showless{
				cursor: pointer;
				color: blue;
				text-decoration: none;
				text-align: right;
			}
			.showmore:hover, .showless:hover{
				text-decoration: underline;
			}
			.desc-wrap{
				width: 600px;
				text-align: center;
				margin: 0 auto;
			}
			.description{
				overflow: hidden;
			}
			
		</style>
		<!-- Plugins -->
		<script type="text/javascript" src="js/jquery.js"></script>
		
		<!-- My code -->
		<script type="text/javascript">
			function attachShowMore(){
				$('.showmore').click(function(){
					$(this).parent().find('.description').css({'height':'auto'});
					$(this).html('Show Less');
					$(this).off('click');
					$(this).click(function(){
						$(this).parent().find('.description').css({'height':'200px'});
						$(this).html('Show More');
						$(this).off('click');
						attachShowMore();
					});
				});
			}
			
			function attachShowMore2(){
				$('.showmore').click(function(){
					var desc = $(this).parent().find('.description');
					desc.css({'height':'auto'});
					var h = desc.height();
					desc.css({'height':'200px'});
					desc.animate({'height':h+'px'},1000, 'swing');
					$(this).parent().find('.showless').show();
					$(this).hide();
				});
				$('.showless').click(function(){
					$(this).parent().find('.description').animate({'height':'200px'},1000, 'swing');
					$(this).parent().find('.showmore').show();
					$(this).hide();
				});
				$('.showless').hide();
			}
			$(attachShowMore2);
		</script>
	</head>
	<body>
	<div class="desc-wrap">
		<div class="description" style="height: 200px;">
			"SomEdaY, I waNna GrOW oLd wiV
			SAm1 ii LuRv && SAm1 WoSz LuRvE
			me :] "<br>
			Another day<br>
			Without your smile<br>
			Another day just passes by<br>
			But now I know<br>
			How much it means<br>
			For you to stay<br>
			Right here with me<br>
			<br>
			The time we spent apart will make our love grow stronger<br>
			But it hurt so bad I cant take it any longer<br>
			<br>
			I wanna grow old with you<br>
			I wanna die lying in your arms<br>
			I wanna grow old with you<br>
			I wanna be looking in your eyes<br>
			I wanna be there for you<br>
			Sharing everything you do<br>
			I wanna grow old with you<br>
			<br>
			A thousand miles between us now<br>
			It causes me to wonder how<br>
			Our love tonight remains so strong<br>
			It makes our risk right all along<br>
			<br>
			The time we spent apart will make our love grow stronger<br>
			But it hurt so bad I cant take it any longer<br>
			<br>
			I wanna grow old with you<br>
			I wanna die lying in your arms<br>
			I wanna grow old with you<br>
			I wanna be looking in your eyes<br>
			I wanna be there for you<br>
			Sharing everything you do<br>
			I wanna grow old with you<br>
			<br>
			Things can come and go I know but<br>
			Baby I believe<br>
			Somethings burning strong between us<br>
			Makes it clear to me<br>
			<br>
			I wanna grow old with you<br>
			I wanna die lying in your arms<br>
			I wanna grow old with you<br>
			I wanna be looking in your eyes<br>
			I wanna be there for you<br>
			Sharing everything you do<br>
			I wanna grow old with you<br>
			Category - Music <br>
			License - Standard YouTube License<br>
		</div>
		<div class="showmore">Show More</div>
		<div class="showless">Show Less</div>
	</div>
	</body>
</html>