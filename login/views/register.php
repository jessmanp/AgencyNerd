<?php include('../application/views/_templates/header.php'); ?>
<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
</header>
<div style="background-color:#eeeeee;">
<br />

<div id="modal"></div>
<div id="popupmessage">
	<div id="message"></div>
	<button class="plain-btn">OK</button>
	<br /><br />
</div>

<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<div id="register">

<h1>New User Registration</h1>
<br />

<form method="post" action="register.php" id="registerform" name="registerform">
	<input type="hidden" id="register" name="register" value="1" />
	
    <label for="user_name">Username<span class="small">*Required</span></label>
    <input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Enter Username" value="<?php if (isset($registration->temp_user_name)) { echo $registration->temp_user_name; } ?>" required />
	
    <label for="user_email">Email<span class="small">*Valid e-mail only</span></label>
    <input id="user_email" type="email" name="user_email" placeholder="Enter Email" value="<?php if (isset($registration->temp_user_email)) { echo $registration->temp_user_email; } ?>" required />

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

<div id="register">

<h1>User Activation</h1>
<br />
<p>Instruction page here (junk folder verbiage) *need RESEND btn</p>

</div>

<?php } ?>

<br />
</div>

<?php
$msg = '';
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
           $msg .= $error." ";
        }
		echo "<script>openModal('error','".$msg."')</script>";
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            $msg .= $message." ";
        }
		echo "<script>openModal('info','".$msg."')</script>";
    }
}
?>

<?php include('../application/views/_templates/footer.php'); ?>
