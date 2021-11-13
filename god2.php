<?php
// Parent class
abstract class Car2 {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car2 {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car2 {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car2 {
  public function intro() : string {
    return "<div>French extravagance! I'm a $this->name!</div>";
  }
}

// Create objects from the child classes

?>