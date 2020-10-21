<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
	<head>
	
	<body>
	<h2>Calculator</h2>
		<form method="get">
			<label>Input First Number :</label>
			<br>
			<input name="n1">
			<br>		
			 Input Second Number:
			<br>
			<input name="n2">
			<br>
			<button type = "+" name= "+" value= "+">+</button>
			<button type = "-" name= "-" value= "+">-</button>
			<button type = "*" name= "*" value= "+">*</button>
			<button type = "/" name= "/" value= "+">/</button>
			<br>

		</form>
		
		<?php
		if(isset($_GET["+"])){
			$this1 = $_GET["n1"];
			$this2 = $_GET["n2"];
			echo $this1 + $this2;
		}
		else if(isset($_GET["-"])){
			$this1 = $_GET["n1"];
			$this2 = $_GET["n2"];
			echo $this1 - $this2;
		}
		else if(isset($_GET["*"])){
			$this1 = $_GET["n1"];
			$this2 = $_GET["n2"];
			echo $this1 * $this2;
		}
		else if(isset($_GET["/"])){
			$this1 = $_GET["n1"];
			$this2 = $_GET["n2"];
			echo $this1 / $this2;
		}
				
		?>
	
	</body>
<html>