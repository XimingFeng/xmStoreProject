 <?php
	include('login.php'); 
	if(isset($_SESSION['loginUser'])){
		// The header() function sends a raw HTTP header to a client.
		header("Location: http://".$_SERVER['HTTP_HOST']."/employee/employeeHomePage.php");
	}

	
?>

<br>

<!DOCTYPE html>
<html>
<head>

	<title>
	Welcome to our Store!
	</title>
	<meta content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		video#bgvid { 
    				position: fixed;
    				top: 50%;
    				left: 50%;
    				min-width: 100%;
    				min-height: 100%;
    				width: auto;
    				height: auto;
    				z-index: -100;
                    -ms-transform: translateX(-50%) translateY(-50%);
                    -moz-transform: translateX(-50%) translateY(-50%);
                    -webkit-transform: translateX(-50%) translateY(-50%);
                    transform: translateX(-50%) translateY(-50%);
                    background: url(/rsc/shopping.jpg) no-repeat;
                    background-size: cover; 
}
	</style>
</head>
<body>
	<?php
		echo $error;
	  ?>
	<br/>
	<!-- why it is empty -->
	<video playsinline autoplay loop poster="rsc/shopping.jpg" id="bgvid">
  		<source src=<?php echo "\"http://". $_SERVER['HTTP_HOST']."/rsc/openningVideo.mp4"."\""?> type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php echo _SERVER['HTTP_HOST'] ?>

	<div class="container">
		<div class="row">
				<div class="col-md-6 col-md-offset-3">
						<h1>Sign In</h1>
						<form action=<?php echo "\"http://". $_SERVER['HTTP_HOST'] . "\"";?> method="post" 
							class="form-vertical">
							<div class="form-group">
								<label for="email">Email address:</label>
								<input name = "userName" type="email" placeholder="用户名（邮箱）"class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" name = "password"  placeholder="密码" class="form-control" id="pwd">
							</div>
    					<input class="btn btn-primary" type="submit"></input>
    					</form>
    			</div>
			</div>
		</div>
	</form> 
		
	</div>
	
</body>
</html>