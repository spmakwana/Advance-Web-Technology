$(function () {

	var a = {
		"title": "abc",
		"desc": "this is desc"
	};

	var b = {
		"title": "hello",
		"desc": "that was description"
	};

	c = new Array();
	c.push(a);
	c.push(b);

	$("#newlistitem").keyup(function (e) {
		if ($("#newlistitem").val() != "") {
			$("#addlistitem").attr("disabled", false);
		} else {
			$("#addlistitem").attr("disabled", true);
		}
	});

	$(document).on("submit", "#todolistform", function (e) {
		e.preventDefault();

		$.post("test.txt", {
				"data": c
			},
			function (data, textStatus, jqXHR) {
				console.log("hello");
			}
		);

		if ($("#newlistitem").val() != "") {
			$("#list1").append("<li>" + $("#newlistitem").val() + "<span class='deleteitem'>X</span></li>");
			$("#newlistitem").val("");
		}
	});

	$(document).on("click", ".deleteitem", function () {
		$(this).parent().remove();
	})

});