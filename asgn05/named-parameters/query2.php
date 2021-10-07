<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM birds WHERE food = :food && habitat = :habitat");
$stmt->bindValue(':food', 'Insects', PDO::PARAM_STR);
$stmt->bindValue(':habitat', 'Open woodlands', PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $commonName = htmlentities($row['common_name']);
  $foodType = htmlentities($row['food']);
  $habitat = htmlentities($row['habitat']);

  echo "The " . $commonName . " eat's " . $foodType . " and lives in " . $habitat . "<br>";
}

?>