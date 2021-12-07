<?php

// Use for Live server:
$sname = "localhost";
$uname = "uav7ers3td1dz";
$password = "Web250153456!";
$db_name = "dbnmvh6vgl7wtn";
$conn = mysqli_connect($sname, $uname, $password, $db_name);


// Use for Localhost
// $sname = "localhost";
// $uname = "root";
// $password = "";
// $db_name = "image_db";
// $conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
  echo "Connection Failed!";
  exit();
}


?>