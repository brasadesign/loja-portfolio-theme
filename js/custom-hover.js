$(function() {
// OPACITY OF BUTTON SET TO 0%
$(".roll").css("opacity","0");
 
// ON MOUSE OVER
$(".roll").hover(function () {
 
// SET OPACITY TO 50%
$(this).stop().animate({
opacity: .5
}, "slow");
},
 
// ON MOUSE OUT
function () {
 
// SET OPACITY BACK TO 0%
$(this).stop().animate({
opacity: 0
}, "slow");
});
});