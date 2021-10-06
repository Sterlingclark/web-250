<?php
include 'connect.php';


foreach($db->query("SELECT * FROM names") as $row ) {
  echo "<br>" . htmlentities($row['firstname']) .  " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";

}



?>