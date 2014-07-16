<div id="user-panel">
	<div class="user-box">
		<div id="settings-link" class="button-select">
			<div class="icon-gears">Settings</div>
		</div>
		<div id="logout-link" class="button-normal">
			<div class="icon-logout">Logout</div>
		</div>
	</div>
</div>
<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
 	<div class="button-right"><div class="icon-user"></div></div>
</header>
<div style="background-color:#eeeeee;">
<br />

<div id="register">

<h1>Account Configuration</h1>

<p>Thank you for comfirming your registration. In order to complete your account setup we need a bit more information from you. Please take a moment to configure your account. If you need help you can email us at <a href="mailto:support@agencynerd.com">support@agencynerd.com</a> or watch our video to get more details on how to complete this configuration. Welcome to Agency Nerd!</p>

	<div class="signup">

		<div class="signup-header">Agency Information</div>
	   	<div id="signup-agency">
<br />
<!-- edit form for agency info -->
<form method="post" action="" id="signup_agency_info" name="signup_agency_info">

    <label for="agency_name">Name<span class="small">*Optional</span></label>
    <input id="agency_name" type="text" name="agency_name" placeholder="Enter Name" />

	<label for="agancy_address">Address<span class="small">*Optional</span></label>
    <input id="agancy_address" type="text" name="agancy_address" placeholder="Enter Address" />

	<label for="agency_city">City<span class="small">*Optional</span></label>
    <input id="agency_city" type="text" name="agency_city" placeholder="Enter City" />

	<label for="agency_state">State<span class="small">*Optional</span></label>
    <input id="agency_state" type="text" name="agency_state" placeholder="Enter State" />

	<label for="user_zip_code">Zip Code<span class="small">*Optional</span></label>
    <input id="user_zip_code" type="text" name="user_zip_code" placeholder="Enter Zip Code" />

    <label for="user_phone">Phone<span class="small">*Optional</span></label>
    <input id="user_phone" type="text" name="user_phone" placeholder="Enter Phone" />

	<div style="clear:both;"></div>
</form>
<br />
	   	</div>

		<div class="signup-middle">Employees</div><div class="arrow-down"></div>
	   	<div id="signup-employees">
<br />
<!-- edit form for adding employees -->
<form method="post" action="register.php" id="registerform" name="registerform">
	
    <label for="user_name">Username<span class="small">*Required</span></label>
    <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Enter Username" required />
	
    <label for="user_email">Email<span class="small">*Valid e-mail only</span></label>
    <input id="user_email" type="email" name="user_email" placeholder="Enter Email" required />

    <label for="user_password_new">Password<span class="small">*Minimum 6 chars</span></label>
    <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" placeholder="Enter Password" required autocomplete="off" />

    <label for="user_password_repeat">Password<span class="small">*Required</span></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="Password Again" required autocomplete="off" />
	
	<div style="clear:both;"></div>
	<br />
	<button class="plain-btn">Add Employee</button>
	<br />
</form>
<br />
	   	</div>

		<div id="signup-footer" class="signup-footer">Compensation Plans</div><div class="arrow-down"></div>
	   	<div id="signup-compensation">
<br />
<!-- edit form for adding compensation plans -->
<form method="post" action="" id="signup_compensation_info" name="signup_compensation_info">

    <label for="compensation_name">Plan Name<span class="small">*Required</span></label>
    <input id="compensation_name" type="text" name="compensation_name" placeholder="Enter Name" required />

	<label for="compensation_position">Position<span class="small">*Required</span></label>
    <input id="compensation_position" type="text" name="compensation_position" placeholder="Enter Position" required />

	<label for="compensation_status">Status<span class="small">*Required</span></label>
    <select class="main-select" id="compensation_status" name="compensation_status" required>
		<option value="">- Select -</option>
		<option value="1">Test an Option</option>
	</select><div class="main-select-after" data="compensation_status">&#x25Be;</div>

	<label for="compensation_draw">Draw<span class="small">*Optional</span></label>
	<input type="checkbox" id="compensation_draw" name="compensation_draw" value="1" /><span><span></span></span>
	<div style="clear:both;"></div>

	<label for="compensation_rate">Rate<span class="small">*Required</span></label>
    <input id="compensation_rate" type="text" name="compensation_rate" placeholder="Enter Rate" required />

    <label for="compensation_commission">Commission Plan<span class="small">*Required</span></label>
    <select class="main-select" id="compensation_commission" name="compensation_commission" required>
		<option value="">- Select -</option>
		<option value="1">Test an Option</option>
	</select><div class="main-select-after" data="compensation_commission">&#x25Be;</div>

	<div style="clear:both;"></div>
	<br />
	<button class="plain-btn">Add Plan</button>
	<br />
</form>
<br />
	   	</div>

	</div>

<br />
<a href="/menu"><button class="plain-btn">Save &amp; Continue</button></a>
<br /><br />

</div>
<br />
</div>

<script>

$(document).ready(function() {
	$("#signup-agency").slideToggle();
});

</script>