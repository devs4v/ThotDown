//arey bum moja korchi! :P
var t, speedbhiya='slow'; //speed set karke rakhiyo ni toh kachra toh hoye hi jaabe! :D
function init(){
//do something here... hanuman ji ko pranaam karein! Kalka mata ke mandir mein jaake mattha tekein! Ganpati ji ko prasad chadhayein! Kripa bani rahegi, aur saath mein JavaScript bhi! :P
$('#logoanim').hover(kholo, bandkaro); //ni ni karke hover wala funksun bhiya...upar jaye toh kholo, bahar nikle to bandkaro...bum ekdum! :D
t = setTimeout(bandkaro, 2000); //shuru mein band karke rakho taaki ki tD dikhe...ni fir tum pe jaisa kanna ho!
}

function bandkaro(){ //self explanatory hai bhai log!!! band karo aur kya...isme kya bataun main??
	$('#left').stop(true).animate({'left': '76px', 'width': '24px'}, speedbhiya);
	$('#right').stop(true).animate({'left': '99px', 'width': '29px'}, speedbhiya);
}
function kholo(){// aur isme khol lo! Behtareen! :D
	$('#left').stop(true).animate({'left': '0px', 'width': '99px'}, speedbhiya);
	$('#right').stop(true).animate({'left': '99px', 'width': '125px'}, speedbhiya);
}

//ni ni karke ho gaya bhiya! :D