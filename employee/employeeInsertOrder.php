<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = <?php  echo "\" http://". $_SERVER['HTTP_HOST']."/employee/employeeHomePage.php\""?> method = "POST" enctype = "multipart/form-data">
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

		<input type="file" name="picToUpload" id = "picToUpload"> </input><br>

		URL: <input type="text" name = "URL"> </input><br>
		<input type="submit" name = "insertOrder"></input>
		</input>
	</form>
    <br>

</body>
</html>