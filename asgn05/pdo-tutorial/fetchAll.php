<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM names");
$results = $stmt->fetchAll();

while ($row = $stmt->fetch()) {
  echo "<br>" . htmlentities($row['firstname']) .  " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";

}


?>