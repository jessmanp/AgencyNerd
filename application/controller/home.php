<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // this method handles the login
		// check if logged in
		if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {
			// pass on to menu page
			header("location: /menu");
		}
        // load jQuery script based on method
		$navScript = 'login.js';
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: setup
     * This method handles what happens when you move to http://yourproject/home/signup
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function setup()
    {
        // load jQuery script based on method
		$navScript = 'settings.js';
        require 'application/views/_templates/header.php';
        require 'application/views/home/setup.php';
        require 'application/views/_templates/footer.php';
    }

}
