<?php 	
	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Conversion Site</title>
</head>
<body>

	<h1>Page 3 [Conversion Rate]</h1>
	<br>

	<h1>Convertion Site</h1> <br>
	<a href="home.php">*Home</a>
	
	<a href="conversion-rate.php">*Conversion Rate</a>

	<a href="history.php">*History</a>
<h1>Convertion Rate:</h1>

<form action="action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"">
		<label for="type">Type:</label> 
    		<select id="type" name="type">
    			<option value="fit-to-inch">Fit to Inch</option>
    			<option value="inch-to-fit">Inch to Fit</option>	
    		</select>

		<label for="value1"></label>
		    <input type="text" id="value1" name="value1">
			
			<label for="value2"></label>
		    <input type="text" id="value2" name="value2">

		<input type="submit" name="submit" value="Submit">
	</form>



