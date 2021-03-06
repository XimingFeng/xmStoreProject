<?php
	use Aws\S3\S3Client;
	define("ROOT", "/var/www/html");
	require ROOT.'/s3/vendor/autoload.php';
	// echo "http://'$_SERVER['HTTP_HOST']'/s3/vendor/autoload.php<br>";
	echo 'If the file s3 exits:   ' . file_exists(ROOT."/s3")."<br>";
	echo $_SERVER['DOCUMENT_ROOT']."<br>";
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