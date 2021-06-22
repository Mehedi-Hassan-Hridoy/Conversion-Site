<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Conversion Site</title>
</head>
<body>

	<h1>Page 1 [Home]</h1>
	<br>


	<a href="home.php">*Home</a>
	
	<a href="conversion-rate.php">*Conversion Rate</a>

	<a href="history.php">*History</a>

	<h1>Converter:</h1>

	<br><br>


	<form action="action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"">
		<label for="type">Type:</label> 
    		<select id="type" name="type">
    			<option value="fit-to-inch">Fit to Inch</option>
    			<option value="inch-to-fit">Inch to Fit</option>	
    		</select>

		<br><br>

		<label for="value">Value:</label>
		    <input type="text" id="value" name="value">
			<br><br>

		<input type="submit" name="submit" value="Result">
	</form>
	
	<br>
	

</body>
</html>