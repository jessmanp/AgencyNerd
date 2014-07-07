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
        // debug message to show where you are, just for the demo
        //echo 'Message from Controller: You are in the controller home, using the method index()';
        // load jQuery script based on method
		$navScript = 'login.js';
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: signup
     * This method handles what happens when you move to http://yourproject/home/signup
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function signup()
    {
        // load jQuery script based on method
		$navScript = 'settings.js';
        require 'application/views/_templates/header.php';
        require 'application/views/home/signup.php';
        require 'application/views/_templates/footer.php';
    }

	/**
     * PAGE: logout
     * This method handles what happens when you move to http://yourproject/home/logout
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function logout()
    {
        // do logout function
		//echo "This will logout the user.";
    }
}
