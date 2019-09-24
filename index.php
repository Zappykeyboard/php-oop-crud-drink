<?php

  include 'db-connection.php';
  include 'popo-drink.php';
  include 'queries.php';

  $res = $conn -> query($query_drinks);

  $drinks = [];

  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $drink = new Drink($row);

      $drinks[] = $drink;

      echo $drink . '<br>';

    }
  }
  echo "<br>--------------------------------<br><br>";


  $max = $drinks[0];
  $min = $drinks[0];
  $sum = 0;

  foreach ($drinks as $dr) {
    
    $sum += $dr-> getPrezzo();

    if ($max -> getPrezzo() < $dr -> getPrezzo()){
      $max = $dr;
    }

    if ($min -> getPrezzo() > $dr -> getPrezzo()){
      $min = $dr;
    }
  }

  echo 'Somma: ' . $sum . '<br>'
        . ' Massimo: '. $max . '<br>'
        . ' Minimo ' . $min;
?>