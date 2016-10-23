<?php
	include('session.php');
	include('uploadSubmit.php');
	$decription = $_POST['description'];
	$brand = $_POST['brandName'];
	$productName = $_POST['productName'];
	$url = $_POST['URL'];
	$introducer = $_POST['introducer'];
	// $db = mysqli_select_db($connection, "xmStore");
	$sql = "
        	SELECT * 
        	FROM employee
        	WHERE employeeName = '$introducer';
        ";
    echo $sql."<br>";
    $query_result = $connection->query($sql);
    $row = $query_result->num_rows;
    if($row == 0){
    	echo "sorry, didn't find ur introducer<br>";
    }else{
    	echo "Hey we find your introducer!<br>";
    }

?>