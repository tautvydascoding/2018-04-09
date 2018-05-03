<?php

class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'sumustinis';
    protected $turtas = 'namas';
    public function getPusryciai() {
        echo $this->pusryciai;
    }
}
class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function getPusryciai() {
        echo "labas";
    }
    public function updateTestosteronas($x) {
        // $testosteronas += $x; // local
        $this->testosteronas += $x;
    }
    public function printVyroDuomenys() {
        echo $this->testosteronas . "<br>";
        echo $this->ugis . "<br>";
        echo $this->turtas . "<br>";
    }
}
$Donatas = new Vyras();
$Donatas->getPusryciai();
$Donatas->printVyroDuomenys();
$Donatas->updateTestosteronas(-2000);
$Donatas->printVyroDuomenys();
//
// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
