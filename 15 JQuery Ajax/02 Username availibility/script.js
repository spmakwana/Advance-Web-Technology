$(function () {

	// // Load method
	// $("#btn1").click(function () {
	// 	$("#newdata").load("ajaxdatad.html", function (responsetext, statustext, xhrobject) {
	// 		// 	if (statustext == "success") {
	// 		// 		alert("request successful");
	// 		// 	} else if (statustext == "error") {
	// 		// 		console.log(xhrobject.statusText);
	// 		// 	}
	// 		// $.get("test.txt", {
	// 		// 	"firstname": "jay",
	// 		// 	"lastname": "patel"
	// 		// }, function (data, textStatus, jaXHR) {
	// 		// 	$("#newdata").html(data);
	// 		// })

	// 		// $.post("test.txt", {
	// 		// 	"firstname": "jay",
	// 		// 	"lastname": "patel"
	// 		// }, function (data, textStatus, jaXHR) {
	// 		// 	$("#newdata").html(data);
	// 		// })


	// 	});


	// })
	$("#username").blur(function (e) {
		// alert("hello");
		$.post("checkuser.php", {
			"username": $("#username").val()
		}, function (data, textStatus, jaXHR) {
			$("#errormessage").html(data);
		})
	});

});