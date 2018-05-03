<?php


 // UZDUOTIS 1.0:
 // sukurti klase 'Gyvunas' su kintamaisiais:
 // public 'svoris', private 'pusryciai', protected 'ligos'

 // UZDUOTIS 1.1
 // sukurti klase 'Vilkas' su kintamaisiais:
 // public 'tipas',

  // UZDUOTIS 2.0:
 // sukurti vilko objekta ir
 // pabandyti isvesti visa info apie Vilka:
 // ugis, ligos, pusryciai

 // UZDUOTIS 3
 // klaseje 'Vilkas' sukurti f-jas:
 // printLigos()

 class Gyvunas {
     public $ugis = 50;
     private $pusryciai = 'pele';
     protected $ligos = '-';
 }
 class Vilkas extends Gyvunas {
     public $tipas = 'zinduolis';

     public function pintLigos() {
         echo 'ligos:' . $this->ligos;
     }
 }
 $Simba = new Vilkas();
 echo $Simba->tipas . "<br />"; // zinduolis
 echo $Simba->ugis . "<br />"; // 50
 // echo $Simba->pusryciai . "<br />"; // ERROR klase Vilkas nepaveldi 'private kintamuju'
 // echo $Simba->ligos . "<br />"; // ERROR kintamieji 'protected' kaip ir 'private' - viesai nepasiekiami (jie pasiekiami tik klases viduje)
echo $Simba->pintLigos();
