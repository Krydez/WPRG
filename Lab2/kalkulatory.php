<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator</title>
</head>
<body>
	<h1>Kalkulator prosty</h1>

	<form method="POST" action="kalkulatory.php">
		<input type="text" name="num1" placeholder="Liczba 1">
		<input type="text" name="num2" placeholder="Liczba 2">
		<select name="operation">
			<option value="add">Dodawanie</option>
			<option value="subtract">Odejmowanie</option>
			<option value="multiply">Mnożenie</option>
			<option value="divide">Dzielenie</option>
		</select>
		<input type="submit" name="submit" value="Oblicz">
	</form>
	<br>
	<?php
if(isset($_POST['submit'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operation = $_POST['operation'];

	switch($operation){
			case "add":
					echo "Wynik: " . ($num1 + $num2);
					break;
			case "subtract":
					echo "Wynik: " . ($num1 - $num2);
					break;
			case "multiply":
					echo "Wynik: " . ($num1 * $num2);
					break;
			case "divide":
					if($num2 == 0){
							echo "nie dziel przez 0";
					}
					else{
							echo "Wynik: " . ($num1 / $num2);
					}
					break;
			default:
					echo "error";
					break;
	}
}
else{
	echo "connection error";
}
	?>
	<h2>Kalkulator zaawansowany</h2>
	<form method="POST">
		<input type="text" name="num" placeholder="iczba">
		<select name="operation">
			<option value="cos">Cosinus</option>
			<option value="sin">Sinus</option>
			<option value="tan">Tangens</option>
			<option value="bin2dec">Binarne na dziesiętne</option>
			<option value="dec2bin">Dziesiętne na binarne</option>
			<option value="dec2hex">Dziesiętne na szesnastkowe</option>
			<option value="hex2dec">Szesnastkowe na dziesiętne</option>
			<option value="deg2rad">Stopnie na radiany</option>
			<option value="rad2deg">Radiany na stopnie</option>
		</select>
		<input type="submit" name="submit2" value="Oblicz">
	</form>

	<?php
if(isset($_POST['submit2'])){
	$num = $_POST['num'];
	$operation = $_POST['operation'];

	switch($operation){
			case "cos":
					echo "Wynik: " . cos($num);
					break;
			case "sin":
					echo "Wynik: " . sin($num);
					break;
			case "tan":
					echo "Wynik: " . tan($num);
					break;
			case "bin2dec":
					echo "Wynik: " . bindec($num);
					break;
			case "dec2bin":
					echo "Wynik: " . decbin($num);
					break;
			case "dec2hex":
					echo "Wynik: " . dechex($num);
					break;
			case "hex2dec":
					echo "Wynik: " . hexdec($num);
					break;
			case "deg2rad":
					echo "Wynik: " . deg2rad($num);
					break;
			case "rad2deg":
					echo "Wynik: " . rad2deg($num);
					break;
			default:
					echo "error";
					break;
	}
}
else{
	echo "connection error";
}
        ?>
        </body>
        </html>