<?php include('../application/views/_templates/header.php'); ?>

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
<div id="home">

<!-- clean separation of HTML and PHP -->
<h2><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
    <label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
    <input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)
    <input type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
    <input id="user_email" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)
    <input type="submit" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
    <input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

    <label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
    <input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

    <label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
    <input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <input type="submit" name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
</form><hr/>

<!-- backlink -->
<a href="/menu/"><?php echo WORDING_BACK_TO_LOGIN; ?></a>

</div>

<?php include('../application/views/_templates/footer.php'); ?>
