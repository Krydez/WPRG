<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zad2</title>
</head>
<body>
<?php
  $file_path = "licznik.txt";
  if (!file_exists($file_path)) {
      file_put_contents($file_path, "1");
  }
  $visits = file_get_contents($file_path);
  $visits++;
  file_put_contents($file_path, $visits);
  echo "Liczba odwiedzin: $visits";
?>
</body>
</html>