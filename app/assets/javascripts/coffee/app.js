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
		$("ul.select-nodes>li").click(function(e) {
			e.preventDefault();
			$("ul.select-nodes>li").removeClass("active");
			$(this).addClass("active");
			var nodeId = $(this).children("a").data("node-id");
			$("#nodeId").attr("value", nodeId);
		});
		$('#insert-picture').click(function() {
			var originTextarea = $("textarea").val();
			$("textarea").val(originTextarea + ' ![Text](Src)');
		});
		$('#insert-link').click(function() {
			var originTextarea = $("textarea").val();
			$("textarea").val(originTextarea + ' [Text](Link)');
		});

		$(".nice-avatar>form>input:submit").click(function(e) {
			var avatarPath = $(".open-file").val();
			if (avatarPath.length == 0) {
				e.preventDefault();

			};
		});
		$(".trigger-save").click(function(e) {
			e.preventDefault();
			if (parseInt($("#w").val())) {
				$(".crop-avatar>form").submit();
			} else {

			}
		});
		$(".trigger-content").click(function() {
			var userName = $(this).parent().children("a").text();
			var originTextarea = $("textarea").val();
			$("textarea").val(originTextarea + '@' + userName + ' ');
		});

	});
})();