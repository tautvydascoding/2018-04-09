<?php

// objekto sukurimas

// uzduotis - sukurti klase Zmogus:
class Zmogus{
  public $vardas = "";
  public $ugis = -1;
  public function einu() {
    echo "Einu einu <br />";
  }
  public function __construct($x, $y) {
    $this->vardas = $x;
    $this->ugis = $y;
  }
}


$Monika = new Zmogus("Monika", 168);
echo "<br /> vardas:" . $Monika->vardas . " ugis:" . $Monika->ugis . "<br />";
$Monika->einu();

$Tadas = new Zmogus("Tadas", 190);
echo "<br /> vardas:" . $Tadas->vardas . " ugis:" . $Tadas->ugis . "<br />";
$Tadas->einu();

$Kestas = new Zmogus("Kestas", 188);
echo "<br /> vardas:" . $Kestas->vardas . " ugis:" . $Kestas->ugis . "<br />";
$Kestas->einu();
