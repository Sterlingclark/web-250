<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description = 'Used bicycle';
  var $weight_kg = 0.0;

  function name() {
    return $this->brand . " " . $this->model . "(" . $this->year . ")";
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2;
  }


}


$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->weight_kg = 1.0;

$cd = new Bicycle;
$cd->brand = 'Cannonda';
$cd->model = 'Synap';
$cd->year = '2019';
$cd->weight_kg = 8.0;

echo $trek->name() . "<br />";
echo $cd->name() .  "<br />";

echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";
// top is property, bottom is a method. 

$trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";

?>