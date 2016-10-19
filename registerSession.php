<?php
	session_start();
	$databaseUser = "db_user";
	$databaseDNS = "my-db-instance.cvmr8gs6cpyf.us-west-2.rds.amazonaws.com";
	$databasePort = 3306;
	$databasePasswords = "ximing1993";
	$targetDatabase = "xmStore";
	$_SESSION['registerError'] = "";

	if(isset($_POST['registerSubmit'])){
		echo "submit is not set";
		if((!isset($_POST["newUserName"])) || (!isset($_POST["newUserPassword"]))){
			$_SESSION['registerError'] = "The user name or password is empty";
			// $error = "User name or password is invalid";
		}
		else{
		echo "the value of registerSubmit is ". (string)$_POST['registerSubmit'];
		$userName = $_POST["newUserName"];
		$password = $_POST["newUserPassword"];
		echo "<br/>";
		echo "The submission is not empty";
		echo "The user name is ".$userName."<br/>";
		
		//create an dataBase connection
		$connection = mysqli_connect($databaseDNS, $databaseUser, $databasePasswords, $targetDatabase, $databasePort);
		echo "connect finished";

		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		else{
  			echo "connet succesed!!!";
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
			if($row >= 1){
				$_SESSION['registerError'] = $_SESSION['registerError']."<br/>" ."you have already registered in our website sweat heart!";
				// header("Location: http://".$_SERVER['HTTP_HOST']."/register.php");
			}else{
				
				$sql = "
					INSERT INTO employee
					VALUES('$password', '$userName');
				";
				$query = $connection->query($sql);
				if($query == true){
					echo "register successed af";
				}else{
					$_SESSION['registerError'] = $connection->error;
				}
			}

			
			
  		}
  	

	}
	}
	echo "The error is ". $_SESSION['registerError'];
	
?>