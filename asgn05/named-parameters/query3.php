<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM birds WHERE backyard_tips LIKE ?");
$stmt->bindValue(1, '%bird feeders%');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $commonName = htmlentities($row['common_name']);
  $backyardTips = htmlentities($row['backyard_tips']);

  echo $commonName . ": " . $backyardTips . "<br>";
}

?>