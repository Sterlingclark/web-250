<?php

class Bird {
  public static $habitat;
  public static $food;
  public static $nesting = "tree";
  public static $conservation;
  public static $instatnce_count = 0;
  public static $egg_num = "0";
  public static $song = "chirp";
  private static $flying = "yes";


  // I couldn't get the Null Coalescing Operator to work so I used 
  // A Ternary Operator instead
  public static function can_fly() {
    $flying_string = (static::$flying == 'yes') ? "can fly" : "is stuck on the ground"; 
    return $flying_string;
  }

  public static function create() {
    $class_name = get_called_class();
    $obj = new static;
    self::$instatnce_count++;
    return $obj;
  }
}

class YellowBelliedFlyCatcher extends Bird {
  public static $name = "yellow-bellied flycatcher";
  public static $diet = "mostly insects.";
  public static $song = "flat chilk";
  public static $egg_num = "3-4, sometimes 5";

}

class Kiwi extends Bird {
  public static $name = "kiwi";
  public static $diet = "omnivorous";
  public static $flying = "no";
}

?>