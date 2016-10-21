<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file exits:   ' . file_exists('vendor');
	
	$config = require('uploadConfig.php');
	$s3 = S3Client::factory([
		'key' => $config['s3']['key'];
		'secret' => $config['s3']['secret'];
	// ]);
?>