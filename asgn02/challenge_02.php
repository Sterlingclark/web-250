<?php

class Dog {
  public $type;
  public $weight;
  public $height;
  public $origin;
  public $color;
  protected $has_tail = true;

  function get_values() {
    return $this->type . "<br />" . $this->weight . "<br />" . $this->height . "<br /> " . $this->origin . "<br />" . $this->color . "<br /> ";
  } 

  public function tail_details() {
    $tail_string =  $this->has_tail == 1 ? "Does have a tail" : "{$this->has_tail} Does not have a tail" ;
    return $tail_string;
  }
}


class GreatDane extends Dog {
  protected $has_tail = true;
} 

class Corgi extends Dog {
  protected $has_tail = false;
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
echo $greatDane->get_values();
echo $greatDane->tail_details() . "<br />";
echo "<hr/ >";
echo $corgi->get_values();
echo $corgi->tail_details() . "<br />";



?>