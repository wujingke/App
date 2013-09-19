(function() {
	$(document).ready(function() {
		var canClose = true;
		$(".login>a").click(function(e) {
			e.preventDefault();
			$(".modal").addClass("active");
		});
		$(".modal>.content").hover(function() {
			canClose = false;
		}, function() {
			canClose = true;
		});
		$(".modal").click(function() {
			if (canClose) {
				$(this).removeClass("active");
			};
		});
		$(".close").click(function() {
			$(this).parents(".modal").removeClass("active");
		});
		$('input, textarea').placeholder();
	});
})();