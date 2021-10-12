<?php

try{
  $db = new PDO('mysql:localhost;dbname=dbd8p5tq91jlch', 'utmqempsv8gnr', 'kj$Ltp@QHjN*S7C');
  // var_dump($db);
} catch(Exception $e) {
  echo $e->getMessage();
  // echo "An error has occured";
}




?>