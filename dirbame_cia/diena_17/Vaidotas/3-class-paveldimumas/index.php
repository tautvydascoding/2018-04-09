<?php

class Gyvunas {
  public $ugis = 50;
  private $pusryciai = 'pele';
  protected $ligos = 'maliarija';
}

class Vilkas extends Gyvunas{
  public $tipas = "zinduolis";
  public function printLigos(){
    echo "ligos :".$this->ligos;
  }

}

//uzduotis:
//sukurti vilko objekta ir isvesti visa informacija apie ji

$Akela = new Vilkas;


echo $Akela->ugis."<br />"; //50
echo $Akela->tipas."<br />"; //zinduolis
echo $Akela->pusryciai."<br />"; //Error, klase Vilkas nepaveldi privaciu kintamuju
echo $Akela->ligos."<br />"; // kintamieji protected, kaip ir private viesai nepasiekiami ( jie pasiekiami tik klases viduje)

//klaseje vilkas sukurti f-jas:
// printLigos();

$Akela.printLigos();
