<?php
	include('session.php');
	include('uploadSubmit.php');
	$decription = $_POST['description'];
	$brand = $_POST['brandName'];
	$productName = $_POST['productName'];
	$url = $_POST['URL'];
	$introducer = $_POST['introducer'];
	$sql = "
        	SELECT * 
        	FROM employee
        	WHERE employeeName = '$introducer';
        ";
    $query_result = $connection->query($sql);
    $row = $query->num_rows;
    if($row == 0){
    	echo "sorry, didn't find ur introducer<br>";
    }else{
    	echo "Hey we find your introducer!<br>"
    }

?>