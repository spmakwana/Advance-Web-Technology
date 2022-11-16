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


	$("#btn1").click(function (e) {
		e.preventDefault();
		$.post("test.txt", {
				"data": c
			},
			function (data, textStatus, jqXHR) {
				console.log("hello");
			}
		);
	});
});