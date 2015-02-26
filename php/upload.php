<?php
$output_dir = "<?= $pageroot ?>/upload/";
if(isset($_FILES["upload_file"]))
{
	$ret = array();
	
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

	$fileDir = $firstName . "_" . $lastName . "/";

	if (file_exists($output_dir . $fileDir) == false) {
		mkdir($output_dir . $fileDir);
	}

	if(!is_array($_FILES["upload_file"]["name"])) {	//single file
 	 	$fileName = $_FILES["upload_file"]["name"] . "-" . time();
 	 	var_dump($fileName);
 		move_uploaded_file($_FILES["upload_file"]["tmp_name"],$output_dir . $fileDir . $fileName);
    	$ret[]= $fileName;
	} else { //Multiple files, file[]
		$fileCount = count($_FILES["upload_file"]["name"]);
		for($i=0; $i < $fileCount; $i++) {
			$fileName = $_FILES["upload_file"]["name"][$i] . "-" . time();
			var_dump($fileName);
			move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i],$output_dir . $fileDir . $fileName);
			$ret[]= $fileName;
		}
	}
    echo json_encode($ret);
} else {
 	echo json_encode(array('error' => 'No file be uploaded !'));
}
?>