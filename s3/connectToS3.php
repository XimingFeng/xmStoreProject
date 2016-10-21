<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file exits:   ' . file_exists('vendor');
	date_default_timezone_set('UTC');
	
	try{
		$s3 = S3Client::factory(array(
			'version' => 'latest',
    		'region'  => 'us-east-1'
		));
		$buckets = $s3->listBuckets();
	}catch(Exception $e){
		exit($e->getMessage());
	}
	

	echo "haha";
?>