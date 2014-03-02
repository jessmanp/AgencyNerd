// do load
		$(document).ready(function() {
		
			// ABOUT
   			$("header").find("img").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#about";
			});
		
			 // NAVIGATION
			$("#whiteboard-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#whiteboard";
			});
			$("#myagency-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#myagency";
			});
			$("#policyentry-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#policyentry";
			});
			$("#controld-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#controld";
			});
			$("#reports-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#reports";
			});
			$("#employees-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#employees";
			});
			$("#support-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#support";
			});
			$("#how-to-videos-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#support-howtovideos";
			});
			$("#settings-link").on("click", function(event) {
				event.preventDefault();
				window.location.href = "app.html#settings";
			});
			$("#logout-link").on("click", function(event) {
				event.preventDefault();
				window.location = "login.html";
			});
			
			// SLIDE OUT MENU
			$(".button-right").on("click", function() {
				var state = parseInt($("#user-panel").css("right"),10) > -250;
				$("#user-panel").animate({"right": (state ? -250: 0)});
			});
			
		});