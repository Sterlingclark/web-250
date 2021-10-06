<?php
include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");
$names = array('Hettie', 'Emma', 'Freddie', 'Brian');

foreach($names as $name) {
  $stmt->bindParam(':firstname', $name);
  $stmt->execute();
  while ($row = $stmt->fetch()) {
    echo "<br>" . htmlentities($row['firstname']) .  " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
  }
}
?>