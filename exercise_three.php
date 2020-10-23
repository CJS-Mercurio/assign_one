<html>
<head>
	    <title>GCD</title>
<head>     
	<body>
        <h1>Finding GCD</h1>
        <form method="post">
            Input First Number: <br><br>
            <input type="text" name="n1" ><br><br>
            Input Second Number: <br><br>
            <input type="text" name="n2" >
            <br><br>
            <input type="submit" name="Submit "value="Submit">
            <br><br>
        </form>
	</body>
<html>
<?php 
    function GCD ($x,$y){
        if($y==0){
            return $x;
        }
        else{
            return GCD ($y,$x%$y);
        }
    }
    if(!isset($_POST["Submit"])){
        $num1 = $_POST["n1"];
        $num2 = $_POST["n2"];

        $min = ($num1<$num2) ? $num1: $num2;
        for($i=1;$i<=$min;$i++){
            if($num1%$i==0 && $num2%$i==0){
                $gcd=$i;

            }
        }
        echo "GCD of $num1 and $num2 is = $gcd";
    }
?>
