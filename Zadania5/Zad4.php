<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zad4</title>
</head>
<body>
<?php
  $file_path = "ip_addresses.txt";
  $ip_address = $_SERVER['REMOTE_ADDR'];
  $allowed_ips = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  if (in_array($ip_address, $allowed_ips)) {
      include("special_page.php");
  } else {
      include("standard_page.php");
  }
?>
</body>
</html>