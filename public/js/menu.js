// do load
$(document).ready(function() {

	// ABOUT
	$("header").find("img").on("click", function(event) {
		// do popup div with about info
		alert("info popup will go here");
	});

	 // NAVIGATION
	$("#whiteboard-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/whiteboard";
	});
	$("#myagency-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/myagency";
	});
	$("#policyentry-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/policyentry";
	});
	$("#controld-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/controld";
	});
	$("#reports-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/reports";
	});
	$("#employees-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/employees";
	});
	$("#support-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/support";
	});
	$("#how-to-videos-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/howtovideos";
	});
	$("#settings-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/home/settings";
	});
	$("#logout-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/home/logout";
	});
	
	// SLIDE OUT MENU
	$(".button-right").on("click", function() {
		var state = parseInt($("#user-panel").css("right"),10) > -250;
		$("#user-panel").animate({"right": (state ? -250: 0)});
	});
	
});