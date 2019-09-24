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

  
?>