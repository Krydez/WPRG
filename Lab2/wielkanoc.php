<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Obliczanie daty Wielkanocy</title>
</head>
<body>
	<h1>Obliczanie daty Wielkanocy dla podanego roku</h1>

	<form method="post" action="wielkanoc.php">
		<label>Podaj rok:</label>
		<input type="number" name="rok" required><br>
		<input type="submit" name="submit" value="Oblicz"><br>
	</form>

	<?php
	if(isset($_POST['submit'])){
		$rok = $_POST['rok'];
		if($rok >= 1 && $rok <= 1582){
			$x = 15;
			$y = 6;
		}
		elseif($rok >= 1583 && $rok <= 1699){
			$x = 22;
			$y = 2;
		}
		elseif($rok >= 1700 && $rok <= 1799){
			$x = 23;
			$y = 3;
		}
		elseif($rok >= 1800 && $rok <= 1899){
			$x = 23;
			$y = 4;
		}
		elseif($rok >= 1900 && $rok <= 2099){
			$x = 24;
			$y = 5;
		}
		elseif($rok >= 2100 && $rok <= 2199){
			$x = 24;
			$y = 6;
		}
		else{
			echo "nieprawidłowy rok";
			exit;
		}

		$a = $rok % 19;
		$b = $rok % 4;
		$c = $rok % 7;
		$d = (19 * $a + $x) % 30;
		$f = (2 * $b + 4 * $c + 6 * $d + $y) % 7;

		if($f == 6 && $d == 29){
			$dzien = 26;
			$miesiac = 4;
		}
		elseif($f == 6 && $d == 28 && ((11 * $x + 11) % 30 < 19)){
			$dzien = 18;
			$miesiac = 4;
		}
		elseif($d + $f < 10){
			$dzien = 22 + $d + $f;
			$miesiac = 3;
		}
		else{
			$dzien = $d + $f - 9;
			$miesiac = 4;
		}

		echo "Data Wielkanocy w roku $rok to: $dzien-$miesiac-$rok";
	}
	?>
</body>
</html>