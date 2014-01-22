//arey bum moja korchi! :P
var t, speedbhiya=15; //speed set karke rakhiyo ni toh kachra toh hoye hi jaabe! :D
function init(){
//do something here... hanuman ji ko pranaam karein! Kalka mata ke mandir mein jaake mattha tekein! Ganpati ji ko prasad chadhayein! Kripa bani rahegi, aur saath mein JavaScript bhi! :P

t = setTimeout(start, 2000); //shuru mein band karke rakho taaki ki tD dikhe...ni fir tum pe jaisa kanna ho!
}
var pos = 0;
function start(){
	$('#overlay').css({'top': pos, 'background-position':'0px '+ -(pos) + 'px'});
	t = setTimeout(start, speedbhiya);
	pos = (pos + 1) % 271;
}