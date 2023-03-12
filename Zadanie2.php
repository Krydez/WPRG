<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zadanie2</title>
</head>
<body>
  <?php
  function zadanie21($index){
    $array=array();
    for($i=0;$i<10;$i++){
        $array[$i]=rand(1,100);
    }
    if ($index < 0 || $index >= count($array)) {
      return "Nieprawidłowy indeks";
    } else {
      return $array[$index];
    }
  }
  echo zadanie21(4),"<br>";

  function zadanie22($countryName) {
    $nationalities = array(
      "Polska" => "Polska",
      "Niemcy" => "Niemiecka",
      "Francja" => "Francuska",
      "Włochy" => "Włoska",
      "Hiszpania" => "Hiszpańska"
    );
    
    if (array_key_exists($countryName, $nationalities)) {
      return $nationalities[$countryName];
    } else {
      return "Nieznana narodowość dla kraju " . $countryName;
    }
  }
  echo zadanie22("Niemcy");
  ?>
</body>
</html>