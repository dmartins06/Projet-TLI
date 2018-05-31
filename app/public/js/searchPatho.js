window.onload = function() {
	if ($("#type option").length <= 1) {
		$.get("types", function(data, status) {
			location.reload();
		});
	}
}
