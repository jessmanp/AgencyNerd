/* <![CDATA[ */
		
// CREATE TODAY DATE
function currentdate() {
	var currentDate = new Date()
	var day = (currentDate.getDate()<10 ? "0" : "") + currentDate.getDate()
	var month = (currentDate.getMonth()<9 ? "0" : "") + (currentDate.getMonth()+1)
	var year =  currentDate.getFullYear()
	var todayDate =  month +"/" +day + "/" + year ;
	return todayDate;
}

// LOAD PAGE
$(document).ready(function() {

	window.scrollTo(0, 0);
	
	var hashTag = window.location.hash
	if (hashTag != "") {
		var section = hashTag;
	} else {
		// setup section info based on URL
		var pathArray = window.location.pathname.split( "/" );
		if (pathArray[3]) {
			var section = "#"+pathArray[2]+"-"+pathArray[3];
		} else if (pathArray[2]) {
			var section = "#"+pathArray[2];
		} else {
			var section = "#myagency";
		}
	}
	
	// ABOUT
	$("header").find("img").on("click", function(event) {
		event.preventDefault();
		//window.location.href = "/about";
		window.location.href = "http://www.agencynerd.com";
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
		$("#agencyinfo-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/agencyinfo";
		});
		$("#billing-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/billing";
		});
		$("#goals-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/goals";
		});
		$("#aemployees-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/employees";
		});
	$("#policies-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/policies";
	});
		$("#punmatched-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/policies/punmatched";
		});
	$("#controld-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/controld";
	});
		$("#upload-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/controld/upload";
		});
		$("#cunmatched-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/controld/cunmatched";
		});
	$("#reports-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/reports";
	});
		$("#productline-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/productline";
		});
		$("#teammembers-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/teammembers";
		});
		$("#rpolicies-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/rpolicies";
		});
		$("#premiums-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/premiums";
		});
		$("#compensation-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/compensation";
		});
		$("#controldsource-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/controldsource";
		});
	$("#employees-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/employees";
	});
	$("#support-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/support";
	});
		$("#faq-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/faq";
		});
		$("#contact-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/contact";
		});
		$("#howtovideos-link").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/howtovideos";
		});
	$("#menu-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/menu/";
	});
	$("#settings-link").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/login/?edit";
	});
	$("#logout-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/login/?logout";
	});
	
	// MOBILE NAVIGATION
	$("#whiteboard-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/whiteboard";
	});
	$("#myagency-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/myagency";
	});
		$("#agencyinfo-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/agencyinfo";
		});
		$("#billing-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/billing";
		});
		$("#goals-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/myagency/goals";
		});
		$("#aemployees-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/employees";
		});
	$("#policies-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/policies";
	});
		$("#punmatched-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/policies/punmatched";
		});
	$("#controld-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/controld";
	});
		$("#upload-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/controld/upload";
		});
		$("#cunmatched-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/controld/cunmatched";
		});
	$("#reports-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/reports";
	});
		$("#productline-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/productline";
		});
		$("#teammembers-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/teammembers";
		});
		$("#rpolicies-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/rpolicies";
		});
		$("#premiums-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/premiums";
		});
		$("#compensation-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/compensation";
		});
		$("#controldsource-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/reports/controldsource";
		});
	$("#employees-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/employees";
	});
	$("#support-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.href = "/app/support";
	});
		$("#faq-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/faq";
		});
		$("#contact-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/contact";
		});
		$("#howtovideos-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.href = "/app/support/howtovideos";
		});
	$("#menu-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location = "/menu/";
	});
	
	// SUB MENUS
	if (section) {
		var page = section.split("-");
		section = page[0];
		page = page[1];

		if (page) {
			// SECONDARY HIGHLIGHT EXPANDED BUTTON
			$(section+"-link").removeClass("button-normal");
			$(section+"-link").addClass("button-select-sub");
			$(section+"-link-mobile").removeClass("button-normal");
			$(section+"-link-mobile").addClass("button-select-sub");
			// HIGHLIGHT SUB BUTTON
			$("#"+page+"-link").removeClass("button-sub-normal");
			$("#"+page+"-link").addClass("button-sub-select");
			$("#"+page+"-link-mobile").removeClass("button-sub-normal");
			$("#"+page+"-link-mobile").addClass("button-sub-select");
		} else {
			// HIGHLIGHT EXPANDED BUTTON
			$(section+"-link").removeClass("button-normal");
			$(section+"-link").addClass("button-select");
			$(section+"-link-mobile").removeClass("button-normal");
			$(section+"-link-mobile").addClass("button-select");
		} // END IF PAGE
		// EXPAND SUB BUTTONS
		switch (section) {
			case "#myagency":
				$(".sub-myagency").slideDown();
				break;
			case "#policies":
				$(".sub-policies").slideDown();
				break;
			case "#controld":
				$(".sub-controld").slideDown();
				break;
			case "#reports":
				$(".sub-reports").slideDown();
				break;
			case "#support":
				$(".sub-support").slideDown();
				break;
		} // END section CASE				
	} // END IF SECTION
	
	// SLIDE OUT MENUS
	$(".button-left").on("click", function() {
		var state = parseInt($("#menu-panel").css("left"),10) > -250;
		$("#menu-panel").animate({"left": (state ? -250: 0)});
		$("#user-panel").animate({"right": "-250px"});
	});
	
	$(".button-right").on("click", function() {
		var state = parseInt($("#user-panel").css("right"),10) > -250;
		$("#user-panel").animate({"right": (state ? -250: 0)});
		$("#menu-panel").animate({"left": "-250px"});
	});
	
	// SHOW SEARCH X
	$("#field").keyup(function() {
		$("#x").fadeIn();
		if ($.trim($("#field").val()) == "") {
			$("#x").fadeOut();
		}
	});
	// on click of "X", delete input field value and hide "X"
	$("#x").click(function() {
		$("#field").val("");
		$(this).hide();
	});





	
});
/* ]]> */
