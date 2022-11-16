$("#state").change(function (e) {
	e.preventDefault();
	state = $("#state").val();
	$.get("getdistrict.php", {
			state: state
		},
		function (data, textStatus) {
			$("#district").html(data)
		}
	);
});

setInterval("GetScore();", 1000);

function GetScore() {
	$("#score2").load("getscore.php");
}

$("#updatescore").click(function (e) {
	e.preventDefault();
	$("#score1").load("getscore.php");
});

$("#username").blur(function (e) {
	username = $("#username").val();
	$.get("getusername.php", {
			username: username
		},
		function (data, textStatus) {
			$("#errormessage").html(data)
		}
	);
});



$(".addtocart").click(function () {
	productid = $(this).parent().find("h2").html();
	$.get("cart.php", {
			productid: productid
		},
		function (data, textStatus) {
			$("#cart").html(data);
		}
	);
})