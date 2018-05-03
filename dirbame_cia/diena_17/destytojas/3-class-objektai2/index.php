<?php

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()'

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
// Atspasudinti varsa ir ugi
// paleisti f-ja 'einu()'


class Zmogus {
    public $vardas = '';
    public $ugis =  -1;
    public function einu() {
        echo "einu <br />";
    } 
}
$monika = new Zmogus( );
$monika->vardas = "Monika";
$monika->ugis = 168;
$monika->einu();
echo "vardas:" . $monika->vardas;

$zmogus1 = new Zmogus();
echo "vardas1:" . $zmogus1->vardas;

$zmogus2 = new Zmogus();
//
