<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = <?php  echo "\" http://". $_SERVER['HTTP_HOST']."/employee/employeeInsertOrder.php"?> method = "post" enctype = "multipart/form-data">
		brandID: <input type="text" name = "brandID">
		</input><br>

		productEnglishName: <input type="text" name = "productEnglishName">
		</input><br>

		productChineseName: <input type="text" name = "productChineseName">
		</input><br>

		PRCPrice: <input type="text" name = "PRCPrice">
		</input><br>

		USAPrice: <input type="text" name = "USAPrice">
		</input><br>

		<input type="file" name="productPic" > </input><br>

		URL: <input type="text" name = "URL"> </input><br>
		<input type="submit"></input>
		</input>
	</form>
    <br>

</body>
</html>