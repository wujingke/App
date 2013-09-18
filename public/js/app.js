(function() {
	$(document).ready(function() {
		$(".login>a").click(function(e) {
			e.preventDefault();
			$(".modal").addClass("active");
		});
		$(".modal").click(function() {
			$(this).removeClass("active");
		});
	});
})();