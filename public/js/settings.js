// do load
$(document).ready(function() {

	// ABOUT
	$("header").find("img").on("click", function(event) {
		// do popup div with about info
		alert("info popup will go here");
	});

	// NAVIGATION
	$("#logout-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/home/logout";
	});
	
	// SLIDE OUT MENUS	
	$(".button-right").on("click", function() {
		var state = parseInt($("#user-panel").css("right"),10) > -250;
		$("#user-panel").animate({"right": (state ? -250: 0)});
		$("#menu-panel").animate({"left": "-250px"});
	});
	
});