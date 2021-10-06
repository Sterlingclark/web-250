<?php
include 'connect.php';

$stmt = $db->query("SELECT * FROM names");

while ($row = $stmt->fetch()) {
  echo "<br>" . htmlentities($row['firstname']) .  " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";

}


?>