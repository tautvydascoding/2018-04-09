<?php

// objekto sukurimas

// uzduotis - sukurti klase Zmogus:
class Zmogus2{
  public $vardas = "Monika";
  public $ugis = 168;
  public function einu() {
    echo "Einu einu";
  }
}

// sukurti 3 objektus: Monika, Tadas, Kestas. Paleisti funkcija, bei atspausdinti vardus ir ugius;
$Monika = new Zmogus2();
echo "<br /> vardas:" . $Monika->vardas . " ugis:" . $Monika->ugis . "<br />";
$Monika->einu();

$Tadas = new Zmogus2();
  $Tadas->vardas="Tadas";
  $Tadas->ugis=190;
echo "<br /> vardas:" . $Tadas->vardas . " ugis:" . $Tadas->ugis . "<br />";
$Tadas->einu();

$Kestas = new Zmogus2();
  $Kestas->vardas="Kestas";
  $Kestas->ugis=188;
echo "<br /> vardas:" . $Kestas->vardas . " ugis:" . $Kestas->ugis . "<br />";
$Kestas->einu();

echo "<br />";
echo "<br />";
echo "<br />";

// INHERITANCE - paveldejimas //

class Gyvunas {
  public $ugis = 50;
  private $pusryciai = 'pele';
  protected $ligos = 'persalimas';
}

class Zinduolis extends Gyvunas {
  public $tipas = 'plesrunas';
  public function printLigos() { // protected nebus pasiekiamos viesai, tad turiu susikurti funkcija, kad taptu public, nes protected as pasiekiu tik klases viduje;
    echo $this->ligos;
  }
}

$Lape = new Zinduolis();
  echo $Lape->ugis . "<br />";
  echo $Lape->tipas . "<br />";
  $Lape-> printLigos(); // negalejau is kart pasiekti protected, todel turiu susikurta public funkcija ir ja galiu pasiekti issikviesdama sukurta public funkcija;
  // echo $Lape->pusryciai . "<br />"; // ERROR !!! klase zinduolis nepaveldi private kintamuju, tad Gyvuno klaseje esantys pusryciai yra nematomi Zinduoliui ir nepasiekiami;
