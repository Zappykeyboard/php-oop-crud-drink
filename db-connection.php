<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'PubDB';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {

    var_dump('error connecting db');
    var_dump($conn);
    die();
  }

?>