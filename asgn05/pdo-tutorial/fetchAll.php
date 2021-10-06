<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM names");
$results = $stmt->fetchAll();

while ($row = $stmt->fetch()) {
  echo "<pre>" . var_dump($row) . "</pre>";

}


?>