<?php
	include('session.php');
	include('uploadSubmit.php')
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
    <a href= <?php  echo "\" http://". $_SERVER['HTTP_HOST']."/customer/customerInsertOrder.php\""?>  > Insert an order</a>

    <h1>Input the information here</h1>
    <a href="http://localhost:8888/employee/findProduct.php">Get information</a>
</body>
</html>