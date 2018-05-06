<?php
class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'Alutis';
    protected $turtas = 'namas';
    public function printPusryciai(){
      echo $this->pusryciai;
    }
}

$gyvunas = new Zmogus();


class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    public function testosteronUpdate($x){
      $this->testosteronas = $x;
    }
    public function testosteronPrint(){
      echo "testosterono kiekis: ".$this->testosteronas."<br />";
    }

    public function printVyroDuomenys(){
      echo $this->ugis."<br />";
      echo $this->pusryciai."<br />";
      echo $this->turtas."<br />";
    }
}
//
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

$vyras = new Vyras();

$vyras->testosteronPrint();

$vyras->testosteronUpdate(7599);

$vyras->testosteronPrint();

$vyras->printVyroDuomenys();

$vyras->printPusryciai(); //public funkcija su private kintamuoju paveldima;








// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
