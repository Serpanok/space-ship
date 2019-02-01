
$(document).ready(function(){
	
	$(".cloud div span").hide(0);
	$("#loading").fadeOut(500);
	
	setTimeout(function(){
		$(".cloud div span").fadeIn(500);
	}, 3000);
	
	$(".glitch").glitch({
		layers: ["#03679B", "#58BDF1"],
		offset: [40, 20],
	});
	
});

$.fn.glitch = function(options) {

	let settings = $.extend({
		layers: ["red", "green"],
		offset: [10, 0],
	}, options);

	let content = $(this).html();
	$(this).html("");
	
	for (var i = 0; i < settings.layers.length; ++i) {
		$(this).append("<div class='layer' style='color:"+settings.layers[i]+";'>" + content + "</div>");
	}
	$(this).append("<div class='display'>" + content + "</div>");

	let self = this;
	let startTime = new Date().getTime();

	this.render = function() {
		let time = new Date().getTime() - startTime;
		let visibility = Math.sin(time / 1) > 0.8;
		self.find(".layer").each(function() {
			let offset = [
				visibility * ((Math.random() * 2 - 1) * settings.offset[0]),
				visibility * ((Math.random() * 2 - 1) * settings.offset[1]),
			];
			$(this)
				.css("top", offset[1] + "px")
				.css("left", offset[0] + "px")
				.css("opacity", 0.2 + visibility * 0.5);
		});
		window.setTimeout(self.render, 200);
	};

	window.setTimeout(this.render, 0);

};