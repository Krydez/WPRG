<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zad1</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
        <label>Wybierz plik:</label>
        <input type="file" name="file"><br><br>
        <input type="submit" value="Przetwórz plik">
  </form>
<?php
  if(isset($_FILES['file'])) {
      $file = $_FILES['file'];
      $filename = $file['name'];
      $tmp_path = $file['tmp_name'];
      $new_path = "./reversed_$filename";
      
      $lines = file($tmp_path, FILE_IGNORE_NEW_LINES);
      $reversed_lines = array_reverse($lines);
      
      file_put_contents($new_path, implode(PHP_EOL, $reversed_lines));
      
      echo "Plik został przetworzony i zapisany pod nazwą $new_path.";
}
?>
</body>
</html>