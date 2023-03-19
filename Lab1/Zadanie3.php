<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zadanie3</title>
</head>
<body>
  <?php
  
  $array=array();
  for($i=0;$i<10;$i++){
      $array[$i]=rand(1,100);
  }
  function getMaxValueFor($array) {
    $maxValue = $array[0];
    $arrayLength = count($array);
  
    for ($i = 1; $i < $arrayLength; $i++) {
      if ($array[$i] > $maxValue) {
        $maxValue = $array[$i];
      }
    }
    return $maxValue;
  }
  function getMaxValueWhile($array) {
    $maxValue = $array[0];
    $arrayLength = count($array);
    $i = 1;
  
    while ($i < $arrayLength) {
      if ($array[$i] > $maxValue) {
        $maxValue = $array[$i];
      }
      $i++;
    }
    return $maxValue;
  }
  function getMaxValueDoWhile($array) {
    $maxValue = $array[0];
    $arrayLength = count($array);
    $i = 1;
  
    do {
      if ($array[$i] > $maxValue) {
        $maxValue = $array[$i];
      }
      $i++;
    } while ($i < $arrayLength);
  
    return $maxValue;
  }
  function getMaxValueForeach($array) {
    $maxValue = $array[0];
  
    foreach ($array as $value) {
      if ($value > $maxValue) {
        $maxValue = $value;
      }
    }
    return $maxValue;
  }
  echo getMaxValueFor($array),"<br>"; 
  echo getMaxValueWhile($array),"<br>";
  echo getMaxValueDoWhile($array),"<br>";
  echo getMaxValueForeach($array),"<br>";
  ?>
</body>
</html>