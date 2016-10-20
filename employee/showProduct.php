<?php
	include('session.php');
	$productNames = "";
	$brandName = $_REQUEST['brandName'];
	$sql = "
		SELECT productEnglishName
		FROM brand INNER JOIN product
			ON brand.brandID = product.brandID
		WHERE brandEnglishName = '$brandName';
	";
	$result = $connection->query($sql);
	if ($result->num_rows > 0) {
    				// output data of each row
    				while($row = $result->fetch_assoc()) {
    				$productNames = $row["productEnglishName"]. " ";
    				}
    }
    echo $productNames;
?>