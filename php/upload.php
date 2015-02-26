<?php
include("../rootpath.php");

header('Content-Type: application/json');

$output_dir = $pageroot . DS . "upload";

if(isset($_FILES["upload_file"]))
{
	try {
		$ret = array();
		$reterror = "";
	//	This is for custom errors;	
	/*	$custom_error= array();
		$custom_error['jquery-upload-file-error']="File already exists";
		echo json_encode($custom_error);
		die();
	*/
		$error =$_FILES["upload_file"]["error"];
		//You need to handle  both cases
		//If Any browser does not support serializing of multiple files using FormData() 
		$firstName = $_FILES['upload_file']['first_name'];
		$lastName = $_FILES['upload_file']['last_name'];
		
		if ($firstName == "" || $firstName == null) {
			# code...
			$firstName = "none";
		}
		if ($lastName == "" || $lastName == null) {
			# code...
			$lastName = "none";
		}
		$fileDir = $firstName . "_" . $lastName;
	
		if (file_exists($output_dir . DS . $fileDir) == false) {
			mkdir($output_dir . DS . $fileDir);
		}
	
		if(!is_array($_FILES["upload_file"]["name"])) {	//single file
			$fileName = $_FILES["upload_file"]["name"];
			if ($error == 0) {
				# code...
		 	 	//var_dump($fileName);
		 		move_uploaded_file($_FILES["upload_file"]["tmp_name"],$output_dir . DS . $fileDir . DS . time() . "_" . $fileName);
		    	$ret[]= $fileName;
			} else {
				throw new Exception($fileName . "-" . codeToMessage($error), $error);
			}
		} else { //Multiple files, file[]
			$fileCount = count($_FILES["upload_file"]["name"]);
			for($i=0; $i < $fileCount; $i++) {
				$fileName = $_FILES["upload_file"]["name"][$i];
				if ($error[$i] == 0) {
					# code...
					//var_dump($fileName);
					move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i],$output_dir . DS . $fileDir . DS . time() . "_" . $fileName);
					$ret[]= $fileName;
				} else {
					$reterror = $reterror . $fileName . "-" . codeToMessage($error[$i]) . "\n";
				}
			}
			if (!($reterror == "")) {
				# code...
				throw new Exception($reterror, 999);
			}
		}
	    echo json_encode($ret);
	} catch (Exception $ex) {
		echo json_encode(array('error' => $ex->getMessage()));
	}
} else {
 	echo json_encode(array('error' => 'No file be uploaded !'));
}

function codeToMessage($code) { 
    switch ($code) { 
        case UPLOAD_ERR_INI_SIZE: 
            $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini"; 
            break; 
        case UPLOAD_ERR_FORM_SIZE: 
            $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
            break; 
        case UPLOAD_ERR_PARTIAL: 
            $message = "The uploaded file was only partially uploaded"; 
            break; 
        case UPLOAD_ERR_NO_FILE: 
            $message = "No file was uploaded"; 
            break; 
        case UPLOAD_ERR_NO_TMP_DIR: 
            $message = "Missing a temporary folder"; 
            break; 
        case UPLOAD_ERR_CANT_WRITE: 
            $message = "Failed to write file to disk"; 
            break; 
        case UPLOAD_ERR_EXTENSION: 
            $message = "File upload stopped by extension"; 
            break; 
        default: 
            $message = "Unknown upload error"; 
            break; 
    } 
    return $message; 
} 
?>