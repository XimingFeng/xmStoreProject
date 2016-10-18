<!DOCTYPE html>
<html>
<head>
	<title>Product Insertion</title>
</head>
<body>
	<button onclick="showInsertForm"></button>
	<h1 id = "formTitle" hidden="true">Input the information here</h1>
	<form id = "insertForm" action = "http://localhost:8888/employee/insertGo.php">
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
		URL: <input type="text" name = "URL"><br>
		<input type="submit"></input>
		</input>
	</form>
</body>
</html>