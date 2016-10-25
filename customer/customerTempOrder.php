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
    			FROM requestOrders INNER JOIN employee
                        ON requestOrders.employeeID = employee.employeeID
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
<!DOCTYPE html>
<html>
<head>
    <title>This is your order detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Order Detail</h2>
    <table class="table table-bordered">
        <tr>
            <th>Order ID</th>
            <td>    <?php echo  $row_result['orderID']; ?> </td>
        </tr>
        
        <tr>
            <th>Introducer</th>
            <td>    <?php echo  $row_result['employeeName']; ?> </td>
        </tr>

        <tr>
            <th>Product Name</th>
            <td></td>
        </tr>

        <tr>
            <th>Order Date Time</th>
            <td>    <?php echo  $row_result['orderDateTime']; ?></td>
        </tr>

        <tr>
            <th>Description</th>
            <td>    <?php echo  $row_result['description']; ?> </td>
        </tr>

        <tr>
            <th>URL</th>
            <td>    <?php echo  $row_result['URL']; ?>  </td>
        </tr>

        <tr>
            <th>Picture</th>
            <td></td>
        </tr>

        <tr>
            <th>Price</th>
            <td></td>
        </tr>
        

    </table>
    
</div>

</body>
</html>