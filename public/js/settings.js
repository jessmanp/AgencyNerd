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

	$(".signup-header").on("click", function() {
		if($(this).find("#setup-arrow").hasClass("arrow-down")) {
			$(this).find("#setup-arrow").removeClass("arrow-down").addClass("arrow-up");
		} else {
			$(this).find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		}
		$(".signup-middle").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$(".signup-footer").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$("#signup-agency").slideToggle();
		$("#signup-employees").slideUp();
		$("#signup-compensation").slideUp();
		$("#signup-commission").slideUp();
		$("#signup-footer").removeClass("signup-middle").addClass("signup-footer");
	});

	$(".signup-middle").on("click", function() {
		if($(this).find("#setup-arrow").hasClass("arrow-down")) {
			$(this).find("#setup-arrow").removeClass("arrow-down").addClass("arrow-up");
		} else {
			$(this).find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		}
		$(".signup-header").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$("#signup-footer").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$("#signup-employees").slideToggle();
		$("#signup-agency").slideUp();
		$("#signup-compensation").slideUp();
		$("#signup-commission").slideUp();
		$("#signup-footer").removeClass("signup-middle").addClass("signup-footer");
	});

	$("#signup-footer").on("click", function(e) {
		if($(this).find("#setup-arrow").hasClass("arrow-down")) {
			$(this).find("#setup-arrow").removeClass("arrow-down").addClass("arrow-up");
		} else {
			$(this).find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		}
		$(".signup-header").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$(".signup-middle").find("#setup-arrow").removeClass("arrow-up").addClass("arrow-down");
		$("#signup-compensation").slideToggle();
		$("#signup-employees").slideUp();
		$("#signup-agency").slideUp();
		$("#signup-commission").slideUp();
		if($(this).hasClass("signup-footer")) {
			$(this).removeClass("signup-footer").addClass("signup-middle");
		} else {
			$(this).removeClass("signup-middle").addClass("signup-footer");
		}
	});




	//var ddstate = false;
	$(".main-select-after").on("click", function() {
    		//$(this).closest("select").trigger("change");
		var elem = $(this).attr("data");
		// NEED TO FIGURE HOW TO TRIGGER DROPDOWN
		//ddstate = !ddstate;
    		//$(elem).prop("size", ddstate ? $("option").length : 1);

	});

	$("#signup_agency_info").submit(function(event) {
		$.ajax({
					type: "POST",
					url: "/home/saveAgencySetup",
					data: $(this).serialize(),
					dataType: "json",
					cache: false,
        				async: true,
					success: function (data) {
						console.log(data);
						if (data.error == true) {
							// show returned error msg here
							$("#info").html(data.msg);
							$("#agency_name").focus();
						} else {
							// setup was successful, send to menu screen
							window.location = "/menu";
						}	
					},
					error: function (request, status, error) {
        					console.log(error);
					}
		});
		event.preventDefault();
	});

	$("#setup_invite_employee").submit(function(event) {
		$.ajax({
					type: "POST",
					url: "/home/inviteEmployeeSetup",
					data: $(this).serialize(),
					dataType: "json",
					cache: false,
        				async: true,
					success: function (data) {
						console.log(data);
						if (data.error == true) {
							// show returned error msg here
							$("#employee_email").focus();
							$("#info").html(data.msg);
						} else {
							// invite was successful, clear fields...
							$("#employee_first_name").val("");
							$("#employee_last_name").val("");
							$("#employee_email").val("");
							$("#employee_type").val("").change();
							// update user drop down in step 3...
							updateEmployeeList();
							// show success message...
							$("#info").html(data.msg);
						}	
					},
					error: function (request, status, error) {
        					console.log(error);
					}
		});
		event.preventDefault();
	});

	function updateEmployeeList() {
		$.ajax({
					type: "POST",
					url: "/home/updateEmployeeList",
					data: $(this).serialize(),
					dataType: "json",
					cache: false,
        				async: true,
					success: function (data) {
						console.log(data);
						if (data.error == true) {
							// show returned error msg here
							$("#info").html(data.msg);
						} else {
							// update was successful populate drop down with json data
							$.each(data, function(key, value) {
								$("#employees_compensation option[value="+value.user_id+"]").remove();
    								$("#employees_compensation").append(
        								$("<option></option>").val(value.user_id).html(value.user_first_name+" "+value.user_last_name)
    								);
  							});
						}	
					},
					error: function (request, status, error) {
        					console.log(error);
					}
		});
	}

	$("#setup_employee_compensation").submit(function(event) {
		$.ajax({
					type: "POST",
					url: "/home/updateEmployeeCompensation",
					data: $(this).serialize(),
					dataType: "json",
					cache: false,
        				async: true,
					success: function (data) {
						console.log(data);
						if (data.error == true) {
							// show returned error msg here
							$("#info").html(data.msg);
						} else {
							// show success message...
							$("#info").html(data.msg);
						}	
					},
					error: function (request, status, error) {
        					console.log(error);
					}
		});
		event.preventDefault();
	});

	$("#save_setup").on("click", function() {
		//do agency info form submit
		$("#signup_agency_info").submit();
		event.preventDefault();
	});

	
	$("#compensation_type1").on("click", function() {
		if ($(this).val() == 1) {
			// change display text
			$("#rate-text").text("per hour");
		}
	});

	$("#compensation_type2").on("click", function() {
		if ($(this).val() == 2) {
			// change display text
			$("#rate-text").text("per month");
		}
	});

	$("#update_employee").on("click", function() {
		//do agency info form submit
		$("#setup_employee_compensation").submit();
		event.preventDefault();
	});


	
});

