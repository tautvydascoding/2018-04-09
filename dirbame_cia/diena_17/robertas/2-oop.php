<?php

// JS objects:
// var Car = {
//   name: "BMW",
//   color: "l-red",
//   drive: function(){
//     // ...
//   }
//   stop: function(){
//     // ...
//   }
// };
//
// car.name = "BTM-x5";
// car.drive();

class Human {
  private $_name, $_height;

  function __construct($name, $height) {
    $this->_name = $name;
    $this->_height = $height;
  }

  public function walk(){
    echo $this->_name . " walks...<br>";
  }

  // --- Getters and Setters ---
  public function getName(){
    return $this->_name;
  }

  public function setName($name){
    return $this->_name = $name;
  }

  public function getHeight(){
    return $this->_height;
  }

  public function setHeight($height){
    return $this->_height = $height;
  }
  // --- end Getters and Setters ---
}

$humans = array(
  "alice" => new Human("Alice", 1.7),
  "bob" => new Human("Bob", 1.8)
);

$humans["alice"]->walk();
$humans["bob"]->walk();

$tom = new Human("Tom", 2);
$tom -> walk();
