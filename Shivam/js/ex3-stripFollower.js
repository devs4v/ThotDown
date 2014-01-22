//arey bum moja korchi! :P
var t, speedbhiya=15; //speed set karke rakhiyo ni toh kachra toh hoye hi jaabe! :D
var pos;

function init(){
//do something here... hanuman ji ko pranaam karein! Kalka mata ke mandir mein jaake mattha tekein! Ganpati ji ko prasad chadhayein! Kripa bani rahegi, aur saath mein JavaScript bhi! :P
var overlay = $('#overlay');
var loc = $('#loc');
	$('#act').mousemove(function(e){
		//var overlay = $('#overlay');
		pos = e.pageY - $(this).offset().top;
		overlay.stop().animate({backgroundPositionY:-(pos) + 'px', 'top': pos + 'px'}, speedbhiya);
		//overlay.css({});
	});
}