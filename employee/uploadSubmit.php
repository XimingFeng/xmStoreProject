<?php
	echo "here we go, is is uploadSubmit.php"
	$uploadDir = "/upload/";
	$targetFile = $uploadDir. basename($_FILES['picToUpload']['name']);
	$uploadOK = 1;
	$imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION) ;
	if(isset($_POST['insertOrder'])){
		$check = getimagesize($_FILES['picToUpload']['tmp_name'], $targetFile);
		if($check !== false){
			echo "file is an iamge - ".$check["mime"]. ".";
			$uploadOK = 1;
		}
		else{
			echo "file is not an image.";
			$uploadOK = 0;
		}
	} 
?>