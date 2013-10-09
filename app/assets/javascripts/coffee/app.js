(function() {
	$(document).ready(function() {
		var canClose = true;
		var updateCoords = function(c) {
			$('#x').val(c.x);
			$('#y').val(c.y);
			$('#w').val(c.w);
			$('#h').val(c.h);
		};

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
		//$("input, textarea").placeholder();
		$("ul.select-nodes>li").click(function(e) {
			e.preventDefault();
			$("ul.select-nodes>li").removeClass("active");
			$(this).addClass("active");
			var nodeId = $(this).children("a").data("node-id");
			$("#nodeId").attr("value", nodeId);
		});
		$(".timeago").timeago();
		$('#insert-picture').click(function() {
			var originTextarea = $("textarea").val();
			$("textarea").val(originTextarea + ' ![Text](Src)');
		});
		$('#insert-link').click(function() {
			var originTextarea = $("textarea").val();
			$("textarea").val(originTextarea + ' [Text](Link)');
		});
		$('#cropbox').Jcrop({
			aspectRatio: 1,
			onSelect: updateCoords
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
		$(".action-frozen").click(function() {
			var topicId = $(this).data("tid");
			$.ajax({
				url: "/topic/" + topicId + "/frozen",
				type: "PUT",
				success: function(data) {
					if (data.success) {
						$(".action-frozen").toggleClass("actived");
					} else {

					}
				}
			});
		});

		var template = '<div class="nice-notice"><p>删除成功</p></div>';

		$(".action-delete").click(function(e) {
			e.preventDefault();
			var toUrl = $(this).attr("href");
			$.ajax({
				url: toUrl,
				type: "DELETE",
				success: function(data) {
					if (data.success) {
						$(".action-delete").parents("li").hide();
						$(".action-delete").parents("ul").prepend(template);
					} else {

					}
				}
			});
		});
		$(".page-view").each(function() {
			var toUrl = $(this).data("page-view");
			$.ajax({
				url: toUrl,
				success: function(data) {
					$(".page-view").html('<i class="icon-eye"></i>' + data.page.view);
				}
			});
		});
		$("a.action-follow").click(function(e) {
			e.preventDefault();
			var thisA = $(this);
			var toUrl = thisA.attr("href");
			$.ajax({
				url: toUrl,
				type: "POST",
				success: function(data) {
					if (data.success) {
						thisA.text(data.relationship);
					} else {
						
					}
				}
			});
		});
	});
})();