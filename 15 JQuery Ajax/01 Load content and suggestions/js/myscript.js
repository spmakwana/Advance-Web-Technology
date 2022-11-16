$(document).ready(function () {
	$("#button1").click(function () {
		$(".ajaxcontent").load("ajax.html");
	})

	$("#button2").click(function () {
		$(".ajaxcontent").load("ajaxcopy.html");
	})

	$("#text1").keyup(function () {
		a = $("#text1").val();
		$.post("getsuggestions.php", {
			input: a
		}, function (data, status) {
			$(".ajaxcontent").html(data);
		})
	})
})