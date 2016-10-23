<?php
	include('session.php');
	$description = $_POST['description'];
	$brand = $_POST['brandName'];
	$productName = $_POST['productName'];
	$url = $_POST['URL'];
	$introducer = $_POST['introducer'];
	$quantity = $_POST['quantity'];
	$date = date("Y-m-d H:i:s");
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
    	$row_result = $query_result->fetch_assoc();
    	$introducerID = $row_result	['employeeID'];
    	echo "the employeeID is:  " . $introducerID . "<br>";
    	$sql = "
    		INSERT INTO requestOrders(orderID, employeeID, productID, quantity, orderDateTime, placed, shipmentID, description, URL)
    		VALUES(default, '$introducerID', default, $quantity, '$date', default, default, '$description', '$url');
    	";
    	echo $sql."<br>";
    	$query_result = $connection->query($sql);
    	if($query_result){
    		echo "order is generated successfully! <br>";
    		
    		$sql = "
    			SELECT * 
    			FROM requestOrders
    			WHERE orderDateTime = '$date' AND employeeID = '$introducerID';
    		";
    		$query_result = $connection->query($sql);
    		$row_result = $query_result->fetch_assoc();
    		$orderID = $row_result['orderID'];
    		echo "orderID is ". $orderID. "<br>";
    		include('uploadSubmit.php');

    	}else{
    		echo $connection->error."<br>";
    		echo "order is not generated, sorry!";
    	}

    }

?>