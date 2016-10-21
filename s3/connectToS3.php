<?php
	use Aws\S3\S3Client;
	require 'vendor/autoload.php';
	
	echo 'If the file exits:   ' . file_exists('vendor');
	
	
	$s3 = S3Client::factory(array(
		'profile' => 'default'
	));
?>