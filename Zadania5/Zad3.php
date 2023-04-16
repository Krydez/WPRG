<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zad3</title>
</head>
<body>
<?php
  $file_path = "odnosniki.txt";
  $file = fopen($file_path, "r");
  $content = fread($file, filesize($file_path));
  fclose($file);
  $lines = explode("\n", $content);
  echo "<ul>";
  foreach ($lines as $line) {
      $data = explode(";", $line);
      $address = trim($data[0]);
      $description = trim($data[1]);
      echo "<li><a href=\"$address\">$description</a></li>";
  }
  echo "</ul>";
?>
</body>
</html>