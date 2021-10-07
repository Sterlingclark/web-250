<?php
include 'connect.php';

$stmt = $db->prepare("INSERT INTO birds (common_name, habitat, food, conservation_id, backyard_tips)
                      VALUES (:common_name, :habitat, :food, :conservation_id, :backyard_tips)");

$stmt->bindValue(':common_name', 'Great Horned Owl');
$stmt->bindValue(':habitat', 'Open woodlands');
$stmt->bindValue(':food', 'Rodents');
$stmt->bindValue(':conservation_id', 1);
$stmt->bindValue(':backyard_tips', 'Install nesting boxes');
$stmt->execute();

?>