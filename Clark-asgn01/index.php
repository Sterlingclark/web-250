<?php

class Bird {
  var $commonName;
  var $habitat;
  var $nestPlacement;
  var $clutchSize;

  function birdSong() {
    return $this->birdSong . "<br />";
  }
}


$bird1 = new Bird;
$bird1->commonName = 'Eastern Towee';
$bird1->food = 'Seeds, Fruits, Insects, Spiders';
$bird1->nestPlacement = 'Ground';
$bird1->clutchSize = 2 - 6;
$bird1->conservationLevel = 'Low';
$bird1->birdSong = 'drink-your-tea!';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'Small seeds, Berries, Buds, and Insects';
$bird2->nestPlacement = 'Fields and on the edges of woods, roadsides, and railroad
rights-of-way.';
$bird2->clutchSize = 3 - 4;
$bird2->conservationLevel = 'Low';
$bird2->birdSong = 'what! what!';

echo "Bird 1: " . "<br />";
echo $bird1->commonName . "<br />";
echo $bird1->food . "<br />";
echo $bird1->nestPlacement . "<br />";
echo $bird1->clutchSize . "<br />";
echo $bird1->conservationLevel . "<br />";
echo $bird1->birdSong() . "<br />";


echo "Bird 2: ". "<br />";
echo $bird2->commonName . "<br />";
echo $bird2->food . "<br />";
echo $bird2->nestPlacement . "<br />";
echo $bird2->clutchSize . "<br />";
echo $bird2->conservationLevel . "<br />";
echo $bird2->birdSong() . "<br />";

?>