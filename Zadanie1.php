<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zadanie1</title>
</head>
<body>
<form method="post" action="Zadanie1.php">
		<label for="figura">Jaką figurę chcesz obliczyć?</label>
		<select name="figura" id="figura">
			<option value="trojkat">Trójkąt</option>
			<option value="prostokat">Prostokąt</option>
			<option value="trapez">Trapez</option>
		</select>
		<br><br>
		<div id="wymiary">
			<label for="bokA">Podaj długość boku A:</label>
			<input type="number" name="bokA" id="bokA"><br>
			<label for="bokB">Podaj długość boku B:</label>
			<input type="number" name="bokB" id="bokB"><br>
			<label for="wysokosc">Podaj wysokość:</label>
			<input type="number" name="wysokosc" id="wysokosc"><br>
		</div>
		<input type="submit" value="Oblicz pole">
	</form>
  <?php 
   function zadanie11() {
    echo "Wylosowano: ";
    echo rand(1,6);
   }
   echo zadanie11(),"<br>";
   function zadanie12($rad){
    echo "Srednica kola to:", $rad*2,"<br>";
   }
   zadanie12(5);
   function zadanie13($zdanie, $niepozadaneSlowa) {
    foreach ($niepozadaneSlowa as $slowo) {
      $zdanie = str_ireplace($slowo, str_repeat('*', strlen($slowo)), $zdanie);
    }
    return $zdanie;
  }
    $zdanie = "To zdanie zawiera niepożądane słowo: spam.";
    $niepozadaneSlowa = array("spam", "niepożądane");
    $ocenzurowaneZdanie = zadanie13($zdanie, $niepozadaneSlowa);
    echo $ocenzurowaneZdanie,"<br>";
    
    function zadanie14($pesel) {
      $year = substr($pesel, 0, 2);
      $month = substr($pesel, 2, 2);
      $day = substr($pesel, 4, 2);
  
      if ($month > 80) {
          $year += 1800;
          $month -= 80;
      } elseif ($month > 60) {
          $year += 2200;
          $month -= 60;
      } elseif ($month > 40) {
          $year += 2100;
          $month -= 40;
      } elseif ($month > 20) {
          $year += 2000;
          $month -= 20;
      } else {
          $year += 1900;
      }
  
      return sprintf('%02d-%02d-%02d', $day, $month, $year % 100);
  }
    $pesel = 88122962431;
    echo zadanie14($pesel,"<br>");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      switch ($_POST["figura"]) {
        case "trojkat":
          obliczPoleTrojkata($_POST["bokA"], $_POST["wysokosc"]);
          break;
        case "prostokat":
          obliczPoleProstokata($_POST["bokA"], $_POST["bokB"]);
          break;
        case "trapez":
          obliczPoleTrapezu($_POST["bokA"], $_POST["bokB"], $_POST["wysokosc"]);
          break;
        default:
          echo "Nie wybrano figury.<br>";
          break;
      }
    }
  
    function obliczPoleTrojkata($bokA, $wysokosc) {
      $pole = 0.5 * $bokA * $wysokosc;
      echo "<br>Pole trójkąta o podstawie $bokA i wysokości $wysokosc wynosi: $pole<br>";
    }
  
    function obliczPoleProstokata($bokA, $bokB) {
      $pole = $bokA * $bokB;
      echo "<br>Pole prostokąta o bokach $bokA i $bokB wynosi: $pole<br>";
    }
  
    function obliczPoleTrapezu($bokA, $bokB, $wysokosc) {
      $pole = 0.5 * ($bokA + $bokB) * $wysokosc;
      echo "<br>Pole trapezu o podstawach $bokA i $bokB oraz wysokości $wysokosc wynosi: $pole<br>";
    }
  ?>
</body>
</html>