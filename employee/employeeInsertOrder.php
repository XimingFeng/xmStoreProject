<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = <?php  echo "\" http://". $_SERVER['HTTP_HOST']."/employee/employeeHomePage.php\""?> method = "POST" enctype = "multipart/form-data">
		brand: 
		<select id = "brandName" name = "brandName">
			
		</select><br>

		product English name or Chinese name: 
		<select>
			
		</select><br>

		<input type="text" name="entail price" placeholder="好多钱嘛！">
			
		</input>

		<input type="file" name="picToUpload" id = "picToUpload"> </input><br>

		URL: <input type="text" name = "URL"> </input><br>
		<input type="submit" name = "insertOrder"></input>
		</input>
	</form>
    <br>

</body>
</html>