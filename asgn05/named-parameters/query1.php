<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM birds WHERE food = :food");
$stmt->bindValue(':food', 'Insects', PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $commonName = htmlentities($row['common_name']);
  $foodType = htmlentities($row['food']);

  echo "The " . $commonName . " eat's " . $foodType . "<br>";
}

?>