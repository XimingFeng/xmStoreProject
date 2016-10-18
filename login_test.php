<?php
	
	session_start();
	$error = ""; // variable to store error message

	
		$userName = '1';
		$password = '1';
		echo "Ready to connect"."<br>";
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = new mysqli("localhost", "root", "root");

		// echo "Ater connection:"."<br
		/*
		if($connection->connect_error){
			die("connect failed: ". $connection->connect_error);
		}
		else{
			echo "connection success";
		}
        */
		// To protect MySQL injection for Security purpose

		
		// $userName = stripcslashes($userName);
		// $password = stripcslashes($password);
		// $userName = mysqli_real_escape_string($userName);
		// $password = mysqli_real_escape_string($password);
		

		echo "after secure process, the userName = ".$userName."<br>";
		echo "after secure process, the password = ".$password."<br>";
		// select db
		$db = mysqli_select_db($connection, "xmStore");
		// echo "The db is ".$db."<br>";

		// SQL query to fetch information of registerd users and finds user match.
		$sql = 
			"
			select *
			from employee
			where password = '$password' and userName = '$userName'
			";
		$query = $connection->query($sql);
		/*
		if(!$query){
			echo "The query failed".$connection->error."<br>";
		}else{
			echo "The query success"."<br>";
		}
		*/

		// mysql_num_rows() returns the number of rows in a result set
		$row = $query->num_rows;
		// echo "The row number is".$row;
		if($row == 1){
			// echo "row number is 1"."<br>";
			$_SESSION['login_user'] = $userName;
			// echo $_SESSION['login_user']." is set"."<br>";
		
		header('Location: http://cnn.com');
		
		}
		else{

		}

		// close the connection
		mysql_close($connection);
		
		
?>