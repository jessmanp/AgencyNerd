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
    
/* /////////////////////////////// BEGIN VIEWS /////////////////////////////// */

	public function whiteboard()
    {
		// load jQuery script based on method
		$navScript = 'application.js';
		$dateScript = 'datepicker.js';
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
		$uploadScript = 'uploadfile.js';
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
    
/* /////////////////////////////// END VIEWS /////////////////////////////// */

    /*
     * This method handles the file upload
     */
    public function fileUpload()
    {
    
		// load a models
        $setup_model = $this->loadModel('SetupModel');
        $files_model = $this->loadModel('FilesModel');
        
		// check if logged in and set agency ID
		if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {
			// get and set agency ID based on the owner
	    		$agency_id = $setup_model->getOwnerAgencyID($_SESSION['user_id']);
		}

		// upload file to server
		$output_dir = FILE_UPLOAD_PATH;
		if(isset($_FILES['myfile']))
		{
			$ret = array();
			$files = array();
			
			$error = $_FILES['myfile']['error'];
			// andle both cases of single/multi files
			// in case any browser does not support serializing of multiple files using FormData() 
			if(!is_array($_FILES['myfile']['name'])) {
				// handle single file
				$fileName = $_FILES['myfile']['name'];
				// make sure file is plain text and set extension
				switch($_FILES['myfile']['type']) {
					case 'text/plain': $ext = 'txt'; break;
					default: $ext = null; break;
				}
				if ($ext) {
					// set filename to random
					$fname = md5(rand()).'.'.$ext;
				} else {
					$error = "ERROR: Wrong File Type or Missing File Extension.";
				}
				// copy renamed file to folder and pass back org file name
				move_uploaded_file($_FILES['myfile']['tmp_name'],$output_dir.$fname);
				$ret[] = $fileName;
				$files[] = array('aid'=>$agency_id,'title'=>$fileName,'filename'=>$fname);
			} else {
				// handle multiple files
			  $fileCount = count($_FILES['myfile']['name']);
			  for($i=0; $i < $fileCount; $i++) {
				$fileName = $_FILES['myfile']['name'][$i];
				// make sure file is plain text and set extension
				switch($_FILES['myfile']['type'][$i]) {
					case 'text/plain': $ext = 'txt'; break;
					default: $ext = null; break;
				}
				if ($ext) {
					// set filename to random
					$fname = md5(rand()).'.'.$ext;
				} else {
					$error = "ERROR: Wrong File Type or Missing File Extension.";
				}
				// copy renamed file to folder and pass back org file name
				move_uploaded_file($_FILES['myfile']['tmp_name'][$i],$output_dir.$fname);
				$ret[]= $fileName;
				$files[] = array('aid'=>$agency_id,'title'=>$fileName,'filename'=>$fname);
			  }
	
			}
			
			// insert file(s) into database
			foreach ($files as $file) {
				$files_model->insertFiles($file['aid'],$file['title'],$file['filename']);
			}
			
			echo json_encode($ret);
		 }
		 
		 
		 
	}
	
	
	
	
	
// EOF	

}
