<?php

function db_connect() {
  $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirm_db_connect($connection);
}


function confirm_db_connect($connection) {
  if($connection->connect_errno) {
    $msg = "Database connect failed: ";
    $msg .= $connection->connect_errno;
    $msg .= "(" . $connection->connect_errno . ")";
    exit($msg);
  }
}

?>