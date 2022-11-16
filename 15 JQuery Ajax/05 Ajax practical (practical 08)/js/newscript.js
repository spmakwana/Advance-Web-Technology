$(function () {
	function LoadTennisScore() {
		$.post("tennisscore.html",
			function (data, textStatus, jqXHR) {
				$("#score").html(data)
			}
		);
	}

	setInterval(LoadTennisScore, 10000);
});