<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file exits:   ' . file_exists('vendor');
	
	try{
		$s3 = S3Client::factory(array(
		'profile' => 'Ximing'
		));
		$buckets = $s3->listBuckets();
	}catch(Exception $e){
		exit($e->getMessage());
	}
	

	echo "haha";
?>