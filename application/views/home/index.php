<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
</header>
<?php
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>
<div style="background-color:#eeeeee;">
	<br /><br />
	<div id="login">
		<span style="font-size:24px;">Login to Agency Nerd</span>
		<br /><br />
		<form name="login" action="/login/index.php" method="post">
			<input id="username" name="user_name" type="text" placeholder="Enter Username" required />
			<br />
			<input id="password" name="user_password" type="password" placeholder="Enter Password" autocomplete="off" required />
			<br />
			<input type="checkbox" id="remember-me" name="user_rememberme" value="1" />
			<label for="remember-me">Remember Me <em>(for 2 weeks)</em></label>
			<br />
			<!-- <input id="login-btn" name="login" type="submit" value="Login" /> -->
			<input name="login" type="hidden" value="1" />
			<button id="login-btn"><span class="icon-key">Login</span></button>
		</form>
		<br />
		Not a member? <a href="/login/register.php">Register Now</a>.<br />
		Forgot password? <a href="/login/password_reset.php">Reset Password</a>.
	</div>
	<br /><br />
</div>

