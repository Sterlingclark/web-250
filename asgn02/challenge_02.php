<?php

class Dog {
  var $type;
  var $weight;
  var $height;
  var $origin;
  var $color;
  var $has_tail = true;

  function get_values() {
    return $this->type . "<br />" . $this->weight . "<br />" . $this->height . "<br /> " . $this->origin . "<br />" . $this->color . "<br /> " . $this->has_tail . " <br />";
  } 
}


class GreatDane extends Dog {
  var $has_tail = true;
} 

class Corgi extends Dog {
  var $has_tail = false;
}


$greatDane = new GreatDane;
$greatDane->type = "Great Dane";
$greatDane->weight = 135;
$greatDane->height = 32;
$greatDane->origin = "Germany";
$greatDane->color = "Fawn";

$corgi = new Corgi;
$corgi->type = "Corgi";
$corgi->weight = 22;
$corgi->height = 12;
$corgi->origin = "Pembrokeshire";
$corgi->color = "Tan";

echo "Dog Type: " . "<br />";
echo $greatDane->get_values() . "<br />";
echo $corgi->get_values() . "<br />";





?>