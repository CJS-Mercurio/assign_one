<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
	<head>
	
	<body>
	<h2>Calculator</h2>
		<form method="get">
			 Input First Number : <br>
			<input name="n1">
			<br><br>		
			 Input Second Number: <br>
			<input name="n2">
			<br><br>
			<button type = "+" name= "+" value= "+">+</button>
			<button type = "-" name= "-" value= "+">-</button>
			<button type = "*" name= "*" value= "+">*</button>
			<button type = "/" name= "/" value= "+">/</button>
			<br>

		</form>
		<h3>Answer :</h3>
		<?php
		if(isset($_GET["+"])){
			$result1 = $_GET["n1"]; 
			$result2 = $_GET["n2"];
			echo $result1 + $result2;
		}
		else if(isset($_GET["-"])){
			$result1 = $_GET["n1"];
			$result2 = $_GET["n2"];
			echo $result1 - $result2;
		}
		else if(isset($_GET["*"])){
			$result1 = $_GET["n1"];
			$result2 = $_GET["n2"];
			echo $result1 * $result2;
		}
		else if(isset($_GET["/"])){
			$result1 = $_GET["n1"];
			$result2 = $_GET["n2"];
			echo $result1 / $result2;
		}
				
		?>
	
	</body>
<html>