<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file exits:   ' . file_exists('vendor');
	
	try{
		$s3 = S3Client::factory(array(
		'profile' => 'Ximing',
		'version' => 'latest',
		'region'   => 'us-west-2'
		));
		$buckets = $s3->listBuckets();
	}catch(Exception $e){
		exit($e->getMessage());
	}
	

	echo "haha";
?>