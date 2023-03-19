<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PESEL info</title>
</head>
<body>

	<h1>PESEL info</h1>

	<form method="post" action="pesel.php">
		<label for="pesel">PESEL:</label>
		<input type="text" name="pesel" id="pesel">
		<input type="submit" value="Decode">
	</form>

	<?php
		$pesel = $_POST['pesel'];
		if (strlen($pesel) != 11) {
			echo '<p>zly PESEL</p>';
		} else {
			$year = substr($pesel, 0, 2);
			$month = substr($pesel, 2, 2);
			$day = substr($pesel, 4, 2);
			$sex = substr($pesel, 9, 1);
			$century = '';
			switch ($month) {
				case ($month >= 81 && $month <= 92):
					$century = '18';
					$month -= 80;
					break;
				case ($month >= 1 && $month <= 12):
					$century = '19';
					break;
				case ($month >= 21 && $month <= 32):
					$century = '20';
					$month -= 20;
					break;
				case ($month >= 41 && $month <= 52):
					$century = '21';
					$month -= 40;
					break;
				case ($month >= 61 && $month <= 72):
					$century = '22';
					$month -= 60;
					break;
				default:
					echo '<p>Invalid PESEL</p>';
					break;
			}
			if ($century) {
				$birthdate = $century . $year . '-' . $month . '-' . $day;
				$gender = $sex % 2 == 0 ? 'female' : 'male';
				echo '<p>Date of birth: ' . $birthdate . '</p>';
				echo '<p>Gender: ' . $gender . '</p>';
			}
		}
	?>

</body>
</html>