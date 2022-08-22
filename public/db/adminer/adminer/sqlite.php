<?php
function adminer_object()
{
	include_once "../plugins/plugin.php";
	include_once "../plugins/login-password-less.php";
	return new AdminerPlugin(array(
		// TODO: inline the result of password_hash() so that the password is not visible in source codes
		new AdminerLoginPasswordLess(password_hash("Damar12345.", PASSWORD_DEFAULT)),
	));

	include "./plugins/drivers/simpledb.php"; // the driver is enabled just by including
	return new Adminer; // or return AdminerPlugin if you want to use other plugins
}

include "./index.php";