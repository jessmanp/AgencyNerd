<header>
	<img src="<?php echo URL; ?>public/img/agency_nerd_app_logo.png" class="home-logo" alt="" />
</header>
<div style="background-color:#eeeeee;">
	<br /><br />
	<div id="login">
		<span style="font-size:24px;">Login to Agency Nerd</span>
		<br /><br />
		<form name="login-form" action="menu.html" method="post">
			<input id="username" name="username" type="text" placeholder="Enter Username" />
			<br />
			<input id="password" name="password" type="password" placeholder="Enter Password" />
			<br /><br />
			<input id="login-btn" name="login-btn" type="submit" value="p" />
		</form>
	</div>
	<br /><br />
</div>





    <!-- demo image -->
    <h3>Demo image, to show usage of public/img folder</h3>
    <div>
        <img src="<?php echo URL; ?>public/img/demo-image.png" />
    </div>
    <!-- navigation -->
    <h3>Demo Navigation</h3>
    <div class="navigation">
        <ul>
            <!-- same like "home" or "home/index" -->
            <li><a href="<?php echo URL; ?>"><?php echo URL; ?>home</a></li>
            <li><a href="<?php echo URL; ?>home/exampleone"><?php echo URL; ?>home/exampleone</a></li>
            <li><a href="<?php echo URL; ?>home/exampletwo"><?php echo URL; ?>home/exampletwo</a></li>
            <!-- "songs" and "songs/index" are the same -->
            <li><a href="<?php echo URL; ?>songs/"><?php echo URL; ?>songs/index</a></li>
        </ul>
    </div>

