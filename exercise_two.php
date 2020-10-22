<html>
<head>
	<title>Calculator</title>
<head>
	<body>
	<h2>Calculator</h2>
		<form method="get">
			 Input First Number: <br><br>
			<input name="n1"><br><br>		
			 Input Second Number: <br><br>
			<input name="n2"><br><br>
			<button type = "+" name= "Add" value= "+">+</button>
			<button type = "-" name= "Sub" value= "+">-</button>
			<button type = "*" name= "Pro" value= "+">*</button>
			<button type = "/" name= "Quo" value= "+">/</button>
			<br>
		</form>		
	</body>
<html>

<?php
		if(isset($_GET["Add"])){
			$num1 = $_GET["n1"]; 
			$num2 = $_GET["n2"];
			$total = $num1 + $num2;
			echo "Answer : ", $total;

		}
		else if(isset($_GET["Sub"])){
			$num1 = $_GET["n1"];
			$num2 = $_GET["n2"];
			$total = $num1 - $num2;
			echo "Answer : ", $total;

		}
		else if(isset($_GET["Pro"])){
			$num1 = $_GET["n1"];
			$num2 = $_GET["n2"];
			$total = $num1 * $num2;
			echo "Answer : ", $total;

		}
		else if(isset($_GET["Quo"])){
			$num1 = $_GET["n1"];
			$num2 = $_GET["n2"];
			$total = $num1 / $num2;
			echo "Answer : ", $total;

		}
				
	?>