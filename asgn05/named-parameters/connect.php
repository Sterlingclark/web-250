<?php

try{
  $db = new PDO('mysql:host=localhost;dbname=birdsQueries;charset=utf8', 'utmqempsv8gnr', 'secretpassword!');
  // var_dump($db);
} catch(Exception $e) {
  // echo $e->getMessage();
  echo "An error has occured";
}




?>