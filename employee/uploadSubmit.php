<?php
	use Aws\S3\Exception\S3Exception;
	require 'xmstore.royxm.com/s3/connectToS3.php';
	echo "here we go, this is uploadSubmit.php";
	$uploadDir = "upload/";
	$targetFile = $uploadDir. basename($_FILES['picToUpload']['name']);
	echo "target file is ". $targetFile. ".   ";
	$uploadOK = 1;
	$imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION) ;
	echo "target file is ". $targetFile. ".   ";
	if(isset($_POST['insertOrder'])){
		$check = getimagesize($_FILES['picToUpload']['tmp_name']);
		if($check !== false){
			echo "file is an image - ".$check["mime"]. ".";
			$uploadOK = 1;
		}
		else{
			echo "file is not an image.";
			$uploadOK = 0;
		}
	}
	echo "target file is ". $targetFile. ".   ";

	if(file_exists("upload")){
		echo " yes babe, there is a file called upload";
	}

	if (file_exists($targetFile)) {
    	echo "Sorry, file already exists.";
    	$uploadOK = 0;
	}else{
		echo "your file does not exist in our website.";
	}

	// Check file size
	if ($_FILES["picToUpload"]["size"] > 500000) {
    	echo "Sorry, your file is too large.";
    	$uploadOK = 0;
	}else{
		echo "your file's size is good. ";
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOK = 0;
	}else{
		echo "file type is good";
	}

	if($uploadOK == 0){
		echo "Sorry, your file was not uploaded.";
	}
	else{
		echo $_FILES['picToUpload']['tmp_name']. " is the first argument";
		echo $targetFile. " is the second argument";
		if(move_uploaded_file($_FILES['picToUpload']['tmp_name'], $targetFile)){
			echo "The file ". basename( $_FILES["picToUpload"]["name"]). " has been uploaded.";
			// upload user pic to s3
			
			/*
			try{
				$s3->putObject(array(
					'Bucket' => 'lasticbeanstalk-us-west-2-772115187324',
					'key' => 'userPicUpLoad/uploadTest.jpeg',
					'body' => fopen($targetFile, 'rb'),
					'ACL' => 'public-read'
				));
			} catch(S3Exception $e){
				die("there was an erroe uploading, you dumb ass!");
			}
			// after the file is uploaded to S3, remove it from server
			unlink($targetFile);
			*/

		}
		else{
			echo "sth is wrong when uploading your file";
		}

		
		


	}
	
?>