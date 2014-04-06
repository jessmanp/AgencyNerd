<?php

/**
 * Class App
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class App extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

	public function whiteboard()
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/_templates/search.php';
        require 'application/views/whiteboard/index.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function myagency($sub = 'index')
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/myagency/'.$sub.'.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function policyentry($sub = 'index')
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/policyentry/'.$sub.'.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function controld($sub = 'index')
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/controld/'.$sub.'.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function reports($sub = 'index')
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/reports/'.$sub.'.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function employees()
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        //require 'application/views/_templates/search.php';
        require 'application/views/employees/index.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

	public function support($sub = 'index')
    {
		// load jQuery script based on method
		$navScript = 'application.js';
        // load views.
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/sub_header.php';
        require 'application/views/support/'.$sub.'.php';
        require 'application/views/_templates/sub_footer.php';
        require 'application/views/_templates/footer.php';
    }

}
