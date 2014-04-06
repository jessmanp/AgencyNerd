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

	function loadDatePickers(){
		new datepickr("datepick1", {
			"dateFormat": "m/d/Y"
		});
		new datepickr("datepick2", {
			"dateFormat": "m/d/Y"
		});
	}

	//bind orientation change to date picker event
	$(window).bind("orientationchange", loadDatePickers);
	$(window).resize(function() {
		loadDatePickers();
	});

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
		window.location.hash = "#about";
		window.location.reload();
	});

	// NAVIGATION
	$("#whiteboard-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#whiteboard";
		window.location.reload();
	});
	$("#myagency-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#myagency";
		window.location.reload();
	});
		$("#agencyinfo-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-agencyinfo";
			window.location.reload();
		});
		$("#billing-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-billing";
			window.location.reload();
		});
		$("#goals-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-goals";
			window.location.reload();
		});
		$("#aemployees-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#employees";
			window.location.reload();
		});
	$("#policyentry-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#policyentry";
		window.location.reload();
	});
		$("#punmatched-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#policyentry-punmatched";
			window.location.reload();
		});
	$("#controld-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#controld";
		window.location.reload();
	});
		$("#upload-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#controld-upload";
			window.location.reload();
		});
		$("#cunmatched-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#controld-cunmatched";
			window.location.reload();
		});
	$("#reports-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#reports";
		window.location.reload();
	});
		$("#productline-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-productline";
			window.location.reload();
		});
		$("#teammembers-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-teammembers";
			window.location.reload();
		});
		$("#policies-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-policies";
			window.location.reload();
		});
		$("#premiums-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-premiums";
			window.location.reload();
		});
		$("#compensation-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-compensation";
			window.location.reload();
		});
		$("#controldsource-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-controldsource";
			window.location.reload();
		});
	$("#employees-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#employees";
		window.location.reload();
	});
	$("#support-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#support";
		window.location.reload();
	});
		$("#faq-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-faq";
			window.location.reload();
		});
		$("#contact-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-contact";
			window.location.reload();
		});
		$("#howtovideos-link").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-howtovideos";
			window.location.reload();
		});
	$("#menu-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/menu/";
	});
	$("#settings-link").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#settings";
		window.location.reload();
	});
	$("#logout-link").on("click", function(event) {
		event.preventDefault();
		window.location = "/login/";
	});
	
	// MOBILE NAVIGATION
	$("#whiteboard-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#whiteboard";
		window.location.reload();
	});
	$("#myagency-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#myagency";
		window.location.reload();
	});
		$("#agencyinfo-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-agencyinfo";
			window.location.reload();
		});
		$("#billing-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-billing";
			window.location.reload();
		});
		$("#goals-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#myagency-goals";
			window.location.reload();
		});
		$("#aemployees-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#employees";
			window.location.reload();
		});
	$("#policyentry-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#policyentry";
		window.location.reload();
	});
		$("#punmatched-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#policyentry-punmatched";
			window.location.reload();
		});
	$("#controld-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#controld";
		window.location.reload();
	});
		$("#upload-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#controld-upload";
			window.location.reload();
		});
		$("#cunmatched-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#controld-cunmatched";
			window.location.reload();
		});
	$("#reports-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#reports";
		window.location.reload();
	});
		$("#productline-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-productline";
			window.location.reload();
		});
		$("#teammembers-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-teammembers";
			window.location.reload();
		});
		$("#policies-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-policies";
			window.location.reload();
		});
		$("#premiums-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-premiums";
			window.location.reload();
		});
		$("#compensation-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-compensation";
			window.location.reload();
		});
		$("#controldsource-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#reports-controldsource";
			window.location.reload();
		});
	$("#employees-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#employees";
		window.location.reload();
	});
	$("#support-link-mobile").on("click", function(event) {
		event.preventDefault();
		window.location.hash = "#support";
		window.location.reload();
	});
		$("#faq-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-faq";
			window.location.reload();
		});
		$("#contact-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-contact";
			window.location.reload();
		});
		$("#howtovideos-link-mobile").on("click", function(event) {
			event.preventDefault();
			window.location.hash = "#support-howtovideos";
			window.location.reload();
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
			case "#policyentry":
				$(".sub-policyentry").slideDown();
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
	
	// SET DATE PICKERS
	$("#datepick1").attr("placeholder", currentdate());
	$("#datepick2").attr("placeholder", currentdate());
	loadDatePickers();
	
});
/* ]]> */
