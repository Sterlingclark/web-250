<?php
include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname LIKE ?");
$names = array('Hettie', 'Emma', 'Freddie', 'Brian');

foreach($names as $namme) {
$stmt->bindValue(1, '%e%');
$stmt->execute();


  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $firstname = htmlentities($row['1']);
    $lastname = htmlentities($row['2']);
    $postcode = htmlentities($row['3']);

    echo $firstname . " " .  $lastname . " " . $postcode . "<br>";
  }
}

?>