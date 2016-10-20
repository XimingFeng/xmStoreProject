<?php
	include('session.php');
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
    	// function to send an ajax request to server in order to show product according to brand selected
    	function showProduct(brandName){

    		var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function(){
  				if (this.readyState == 4 && this.status == 200) {
  					var productNames = this.responseText.split(" ");
  					var numOfProduct = productNames.length;
  					alert("the number of product is" + numOfProduct);
  					for(var i = 0; i < numOfProduct; i ++){
  						console.log("The name is: " + productNames[i] + "/n");
  						var node = document.createElement("option");
  						node.setAttribute("value", productNames[i]);
  						document.getElementById("productName").appendChild(node);
  					}
  				}
  				else{
  					document.getElementById("productName").innerHTML = "no response shows";
  				}
  			}
  			xhttp.open("GET", "showProduct.php?brandName="+brandName, true);
  			xhttp.send();

    	}

    </script>
</head>
<body>
	<form action = <?php  echo "\" http://". $_SERVER['HTTP_HOST']."/employee/employeeHomePage.php\""?> method = "POST" enctype = "multipart/form-data">
		brand: 
		<select id = "brandName" name = "brandName" onchange = "showProduct(this.value);" >
			<?php

				$sql = "
					select brandEnglishName
					from brand
				";

				$result = $connection->query($sql);
				
				echo "query finished";

				if ($result->num_rows > 0) {
    				// output data of each row
    				while($row = $result->fetch_assoc()) {
    				echo "find a brand!";
        			echo "<option value = \"" . $row['brandEnglishName']. "\">". $row['brandEnglishName'] . " </option>";
    				}
    			}
    			else {
    				echo "0 results";
				}
			?>
			
		</select><br>

		product English name or Chinese name: 
		<select id = "productName">
			
		</select><br>

		<input type="text" name="entailPrice" placeholder="好多钱嘛！">
			
		</input><br>

		<input type="file" name="picToUpload" id = "picToUpload"> </input><br>

		URL: <input type="text" name = "URL"> </input><br>
		<input type="submit" name = "insertOrder"></input>
		</input>
	</form>
    <br>

</body>
</html>