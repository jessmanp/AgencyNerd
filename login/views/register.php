<?php include('../application/views/_templates/header.php'); ?>
<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
</header>
<div style="background-color:#eeeeee;">
<br /><br />

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<div id="register">

<h1>New User Registration</h1>
<br />

<form method="post" action="register.php" id="registerform" name="registerform">
	<input type="hidden" id="register" name="register" value="1" />
	
    <label for="user_name">Username<span class="small">*Required</span></label>
    <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Enter Username" required />
	
    <label for="user_email">Email<span class="small">*Valid e-mail only</span></label>
    <input id="user_email" type="email" name="user_email" placeholder="Enter Email" required />

    <label for="user_password_new">Password<span class="small">*Minimum 6 chars</span></label>
    <input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" placeholder="Enter Password" required autocomplete="off" />

    <label for="user_password_repeat">Password<span class="small">*Required</span></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="Password Again" required autocomplete="off" />
	
	<br /><img id="captcha-image" src="tools/showCaptcha.php" alt="captcha" />
	<div style="clear:both;"></div>
    <label>Captcha<span class="small">*Required</span></label>
    <input type="text" id="captcha" name="captcha" required placeholder="Enter code" />
	
	<div style="clear:both;"></div>
	<br />
	<button id="register-btn"><span class="icon-policy-entry">Register</span></button>
	<br />
    <!-- <input type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" /> -->
</form>
<div style="clear:both;"></div>
</div>
<?php } else { ?>
<?php if ($registration->verification_successful) { ?>
<div id="register">

<h1>New User Account Setup</h1>
<br />
setup steps will go here
<br />
</div>
<?php } ?>
<?php } ?>

<br /><br />
</div>

<?php include('../application/views/_templates/footer.php'); ?>