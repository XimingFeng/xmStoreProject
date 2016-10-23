<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file vender exits:   ' . file_exists('vendor')."<br>";
	date_default_timezone_set('UTC');
	
	try{
		$s3 = S3Client::factory(array(
			'version' => 'latest',
    		'region'  => 'us-west-2'
		));
		$buckets = $s3->listBuckets();
	}catch(Exception $e){
		exit($e->getMessage());
	}
?>