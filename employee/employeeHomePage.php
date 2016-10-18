<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head> 
	<title>
	Welcome to your world
	</title>
</head>
<body>
	<div id = "profile">
		<b id = "Welcome">
			Welcome: 
			<i><?php echo $_SESSION['login_user'];?></i>
		</b>
		<b align="right" style="vertical-align: top;" id = "logout"> 
		<a href = "logout.php">Log Out</a>
		</b>
	</div>


    What do u want(你要爪子)?
    <br>
    <h1>Input the information here</h1>
	<form action = "http://localhost:8888/employee/insertGo.php">
		brandID: <input type="text" name = "brandID">
		</input><br>
		productEnglishName: <input type="text" name = "productEnglishName">
		</input><br>
		productChineseName: <input type="text" name = "productChineseName">
		</input><br>
		PRCPrice: <input type="text" name = "PRCPrice">
		</input><br>
		USAPrice: <input type="text" name = "USAPrice">
		</input><br>
		URL: <input type="text" name = "URL"><br>
		<input type="submit"></input>
		</input>
	</form>
    <br>
    <a href="http://localhost:8888/employee/findProduct.php">Get information</a>
</body>
</html>