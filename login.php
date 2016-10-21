
<?php
	session_start();
	$databaseUser = "db_user";
	$databaseDNS = "my-db-instance.cvmr8gs6cpyf.us-west-2.rds.amazonaws.com";
	$databasePort = 3306;
	$databasePasswords = "ximing1993";
	$targetDatabase = "xmStore";
	// echo "login page start";
	// echo $_SERVER['HTTP_HOST'];

	if(isset($_POST["submit"])){
		// echo "submit is set";
		if(empty($_POST["userName"]) || empty($_POST["password"])){
			// echo "inValid User Name";
			// $error = "User name or password is invalid";
		}
	}
	else{
		$userName = $_POST["userName"];
		$password = $_POST["password"];
		// echo "<br/>";
		// echo "The submission is not empty";
		// echo "The user name is ".$userName."<br/>";
		
		//create an dataBase connection
		$connection = mysqli_connect($databaseDNS, $databaseUser, $databasePasswords, $targetDatabase, $databasePort);
		// echo "connect finished";

		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		else{
  			// echo "connet succesed!!!";
  			$db = mysqli_select_db($connection, "xmStore");
  			$sql = 
			"
			select *
			from employee
			where password = '$password' and userName = '$userName'
			";
			echo $sql;
			$query = $connection->query($sql);
			$row = $query->num_rows;
			if($row == 1){
				// echo "Congrat! We found ya!";
				$_SESSION['login_user'] = $_POST["userName"];
				// echo "session Login user is ".$_SESSION['login_user'];
				echo $_SERVER['HTTP_HOST']."/employee/employeeHomePage.php";
				header("Location: http://".$_SERVER['HTTP_HOST']."/employee/employeeHomePage.php");
			}else{
				echo "sorry we didn't find u ~";
			}

			
			
  		}
  	

	}

	
	
?>