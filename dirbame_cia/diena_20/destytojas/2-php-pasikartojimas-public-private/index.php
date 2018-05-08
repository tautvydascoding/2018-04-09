<?php

// UZDUOTIS:
// 1. sukurti dvi klases A ir B
// "B" klase turi paveldi "A"
// "A" klase turi kintamuosius:
// name , plaukuSpalva, sirdiesYda
// kurie yra "public", "private", "protected"


class A {
     public $plaukuSpalva = "geltona";

     private $name = 'TOmas';
     protected $sirdiesYda = "dviguba";

     public function test() {
         echo $this->plaukuSpalva . '<br>';
         echo $this->name . '<br>';
         echo $this->sirdiesYda . '<br>';
     }
}
// $zmogus1 = new A();
// echo $zmogus1->plaukuSpalva . '<br>';
// // echo $zmogus1->name . '<br>';
// // echo $zmogus1->sirdiesYda . '<br>';
//
// $zmogus1->test();

// 2. SUSIKURTI "B" objekta
// 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje)
