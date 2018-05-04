<?php



 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje)





 class A {
     public $plaukuSpalva = "ruzava";
     private $name = "Tomas";
     protected $sirdiesYda = "xxp5";

     public function printName() {
         echo $this->name . "<br />"; // ERROR
     }
 }
 class B extends A {
     // paveldimos visos 'public' ir 'protected' kintamieji/ f-jos
     public function printSirdiesYda() {
         echo $this->sirdiesYda . "<br />";
     }
     // public function printName() {
     //     echo $this->name . "<br />"; // ERROR
     // }
 }
$objektas = new B();
echo $objektas->plaukuSpalva . "<br />";
// echo $objektas->name . "<br />";       //eroror
// echo $objektas->sirdiesYda. "<br />";  //error
$objektas->printSirdiesYda();
$objektas->printName();
