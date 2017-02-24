
$(document).ready(function(){
	
	$(".cloud div span").hide(0);
	
	$("#loading").fadeOut(500);
	
	setTimeout(function(){
		$(".cloud div span").fadeIn(500);
	}, 3000);
	
	/*$(".cloud div").hover(function(){
		alert(1);
		$(this).children("span").fadeIn(100);
	},
	function(){
		alert(0);
		$(this).children("span").fadeOut(100);
	});*/
	
});