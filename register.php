 <?php
	include('signUpSession.php'); 
	if(isset($_SESSION['newUser'])){
		// The header() function sends a raw HTTP header to a client.
		header("Location: http://".$_SERVER['HTTP_HOST']."/employee/employeeHomePage.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up for xmStore!</title>
</head>
<body>
		<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	

	<div class="container">
		<div class="row">
				<div class="col-md-6 col-md-offset-3">
						<h1>Sign Up!</h1>
						<form action=<?php echo "\"http://". $_SERVER['HTTP_HOST'] . "\"";?> method="post" 
							class="form-vertical">
							<div class="form-group">
								<label for="email">Email address:</label>
								<input name = "newUserName" type="email" placeholder="用户名（邮箱）"class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" name = "newUserpassword"  placeholder="密码" class="form-control" id="pwd">
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