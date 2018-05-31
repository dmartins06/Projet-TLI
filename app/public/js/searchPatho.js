window.onload = function() {
	if ($("#type").has("option").length == 0) {
		$.get("types", function(data, status) {
			location.reload();
		});
	}
}