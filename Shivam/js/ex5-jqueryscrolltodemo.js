/* ex5-jqueryscrolltodemo.js	*/

function init(){
	/* initialization */
	// Assign event handlers
	$(".item").click(function(e){
		$(document).scrollTo($(this).find("a").attr('href'), 'slow');
	});
	$(".return").click(function(e){
		$(document).scrollTo('0px', 'slow');
		//e.preventDefault();
	});
}

$(init);	// adding to the body onload