<?php
include 'connect.php';

$stmt = $db->prepare("DELETE FROM birds WHERE common_name = :common_name");

$stmt->bindValue(':common_name', 'Great Horned Owl');
$stmt->execute();

?>