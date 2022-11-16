$(function () {
	$(document).on("submit", "#todolistform", function (e) {
		e.preventDefault();
		if ($("#newlistitem").val() != "") {
			$("#list1").append("<li>" + $("#newlistitem").val() + "<span class='deleteitem'>X</span></li>");
			$("#newlistitem").val("");
		}
		$(document).on("click", ".deleteitem", function () {
			$(this).parent().remove();
		})
	})
});