<?php

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas

class Zmogus {
    public $ugis = 0;
    private $pusryciai = '';
    protected $turtas = 'namas';
    protected function noriuPusryciu() { // buciau galesusi tiesiog daryti Public ir tada butu galima tiesiog issisaukti funkcija, net butu nereikeje Vyro klaseje sukurti kitos funkcijos;
      $this->pusryciai = "Sumustinis";
      echo $this->pusryciai . "<br />";
    }
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    public function keiciuKieki() {
      $this->testosteronas += 1000; //+= kiekviena karta prie saves prides po 1000, kai iskviesiu funkcija;
      echo $this->testosteronas . "<br />";
    }

    public function printVyroDuomenys() {
      echo $this->ugis . "<br />";
      echo $this->turtas . "<br />";
    }

    public function valgau() {
      echo $this->noriuPusryciu() . "<br />";
    }

}

$Jurgis = new Vyras();

$Jurgis->keiciuKieki();
$Jurgis->printVyroDuomenys();
$Jurgis->valgau();
