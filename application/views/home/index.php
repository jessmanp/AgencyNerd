<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
</header>
<div style="background-color:#eeeeee;">
	<br /><br />
	<div id="login">
		<span style="font-size:24px;">Login to Agency Nerd</span>
		<br /><br />
		<form name="login-form" action="/menu" method="post">
			<input id="username" name="username" type="text" placeholder="Enter Username" />
			<br />
			<input id="password" name="password" type="password" placeholder="Enter Password" />
			<br /><br />
			<!-- <input id="login-btn" name="login-btn" type="submit" value="Login" /> -->
			<button id="login-btn"><span class="icon-key">Login</span></button>
		</form>
	</div>
	<br /><br />
</div>

