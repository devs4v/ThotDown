function attachShowMore2(){
				$('.showmore').click(function(){
					var desc = $(this).parent().find('.video-desc');
					desc.css({'height':'auto'});
					var h = desc.height();
					desc.css({'height':'100px'});
					desc.animate({'height':h+'px'},1000, 'swing');
					$(this).parent().find('.showless').show();
					$(this).hide();
				});
				$('.showless').click(function(){
					$(this).parent().find('.video-desc').animate({'height':'100px'},1000, 'swing');
					$(this).parent().find('.showmore').show();
					$(this).hide();
				});
				$('.showless').hide();
			}
$(attachShowMore2);