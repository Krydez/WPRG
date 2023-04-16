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
  function factorialRecursive($n)
  {
      if ($n == 0 || $n == 1) {
          return 1;
      } else {
          return $n * factorialRecursive($n - 1);
      }
  }
  
  function factorialNonRecursive($n)
  {
      $result = 1;
      for ($i = 2; $i <= $n; $i++) {
          $result *= $i;
      }
      return $result;
  }
  
  $number = 10;
  $start = microtime(true);
  $recursiveResult = factorialRecursive($number);
  $recursiveTime = microtime(true) - $start;
  
  $start = microtime(true);
  $nonRecursiveResult = factorialNonRecursive($number);
  $nonRecursiveTime = microtime(true) - $start;
  
  echo "Silnia $number obliczona rekurencyjnie: $recursiveResult w czasie $recursiveTime s<br>";
  echo "Silnia $number obliczona nierekurencyjnie: $nonRecursiveResult w czasie $nonRecursiveTime s<br>";
  
  if ($recursiveTime < $nonRecursiveTime) {
      echo "Funkcja rekurencyjna była szybsza o " . ($nonRecursiveTime - $recursiveTime) . " s.";
  } else {
      echo "Funkcja nierekurencyjna była szybsza o " . ($recursiveTime - $nonRecursiveTime) . " s.";
  }
  ?>
</body>
</html>