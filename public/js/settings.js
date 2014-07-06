// do load
$(document).ready(function() {

	// ABOUT
	$("header").find("img").on("click", function(event) {
		event.preventDefault();
		//window.location.href = "/about";
		window.location.href = "http://www.agencynerd.com";
	});

	// NAVIGATION
	$("#logout-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/login/?logout";
	});
	
	// SLIDE OUT MENUS	
	$(".button-right").on("click", function() {
		var state = parseInt($("#user-panel").css("right"),10) > -250;
		$("#user-panel").animate({"right": (state ? -250: 0)});
		$("#menu-panel").animate({"left": "-250px"});
	});
	
	// REGISTER FORM	
	$("#register-btn").on("click", function() {
		//event.preventDefault();
		$("#registerform").submit();
	});
	
	$("#registerform").submit(function() {
		var valid = true;
		$("div.error", this).remove();
		if (!$("#user_name").val()) {
			valid = false;
			$('<div class="error">Please enter a Username</div>').insertBefore($("#user_name").prev());
		}
		if (!$("#user_email").val()) {
			valid = false;
			$('<div class="error">Please enter an Email Address</div>').insertBefore($("#user_email").prev());
		} else if (echeck($("#user_email").val()) == false) {
			valid = false;
			$('<div class="error">Please enter a Valid Email</div>').insertBefore($("#user_email").prev());
		}
		if (!$("#user_password_new").val()) {
			valid = false;
			$('<div class="error">Please enter a Password</div>').insertBefore($("#user_password_new").prev());
		}
		if (!$("#user_password_repeat").val()) {
			valid = false;
			$('<div class="error">Please re-enter the Password</div>').insertBefore($("#user_password_repeat").prev());
		} else if ($("#user_password_repeat").val() != $("#user_password_new").val()) {
			valid = false;
			$('<div class="error">Please re-enter the Same Password</div>').insertBefore($("#user_password_repeat").prev());
		}
		if (!$("#captcha").val()) {
			valid = false;
			$('<div class="error">Please enter the Captcha Code</div>').insertBefore($("#captcha").prev());
		}
		return valid;
	});
	
});