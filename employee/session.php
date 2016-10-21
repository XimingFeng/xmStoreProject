<?php
    session_start();
    $databaseUser = "db_user";
    $databaseDNS = "my-db-instance.cvmr8gs6cpyf.us-west-2.rds.amazonaws.com";
    $databasePort = 3306;
    $databasePasswords = "ximing1993";
    $targetDatabase = "xmStore";
    echo "session Login user is ".$_SESSION['login_user'];
    //create an dataBase connection
    $connection = mysqli_connect($databaseDNS, $databaseUser, $databasePasswords, $targetDatabase, $databasePort);
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        // echo "connection to mysql successed !!!!!";

        $db = mysqli_select_db($connection, "xmStore");
    }

    
    /*
    if(!isset($_SESSION['login_user'])){
        mysqli_close($connection);
        header("Location: ../");
    }
    else{
        echo $_SESSION['login_user'];
        echo "Welcome Babe";
    }
    */
    /*
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
    //create an dataBase connection
    $connection = mysqli_connect($databaseDNS, $databaseUser, $databasePasswords, $targetDatabase, $databasePort);
    echo "connect finished";

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        echo "connection successed !!!!!";

        $db = mysqli_select_db($connection, "xmStore");
        $user_check = $_SESSION['login_user'];
        echo "The login user is: ".$user_check."<br>";

        $sql = "
        select *
        from employee
        where userName = '$user_check'
        ";
        $query_result = $connection->query($sql);

        $row = $query_result->fetch_assoc();

        $login_session = $row['userName'];
    }
    
    // Selecting Database
    $db = mysqli_select_db($connection, "xmStore");
    // echo "The db is ".$db."<br>";

    // storing session
    $user_check = $_SESSION['login_user'];
    // echo "The login user is: ".$user_check."<br>";
    // SQL Query To Fetch Complete Information Of User
    $sql = "
    	select *
    	from employee
    	where userName = '$user_check'
    	";

    $query_result = $connection->query($sql);

    
    // mysql_fetch_assoc returns an array containing one row of data, or FALSE if there are no more rows.
    // Fetch a result row as an associative array
    $row = $query_result->fetch_assoc();
    /*
    if($row){
        echo "select success"."<br>";
    }else{
        echo "select failed"."<br>";
    }

    $login_session = $row['userName'];
    // echo "Data selected from employee is ".$login_session."<br>";
    */


    
    

?>