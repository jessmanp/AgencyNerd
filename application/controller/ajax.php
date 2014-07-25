<?php

/**
 * Class AJAX
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Ajax extends Controller
{
	 /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/ajax/index (which is the default page btw)
     */
    public function index()
    {
        // this method handles the login
		// check if logged in
		if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {
			// pass on to menu page
			header("location: /menu");
		}
    }

    /**
     * PAGE: *ANY*
     * This method handles what happens when the setup page saves Agency Info
     */
    public function saveAgencyInfo()
    {

                //Put form elements into post variables (this is where you would sanitize your data)
                $agency_name = @$_REQUEST['agency_name'];
 
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
 
                //Begin form validation functionality
                if (!isset($agency_name) || empty($agency_name)){
                        $return['error'] = true;
                        $return['msg'] .= 'Error: Agency Name is empty.';
                }
 
                //Begin form success functionality
                if ($return['error'] === false){
                        $return['msg'] = 'Success, All Required Fields Entered';
                }
 
                //Return json encoded results
                return json_encode($return);

	}

 
}

$ajaxValidate = new Ajax;
echo $ajaxValidate->saveAgencyInfo();

?>