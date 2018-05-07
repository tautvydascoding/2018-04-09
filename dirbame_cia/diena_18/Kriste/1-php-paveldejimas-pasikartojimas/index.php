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
  public $name = "Antanas";
  protected $plaukuSpalva = "juodi";
  private $sirdiesYda = "taip";
    protected function yda() {
      echo $this->sirdiesYda . "<br />";
    }
}

class B extends A {
  public $statusas = "paveldetojas";
    public function paveldetaYda() {
      echo $this->yda();
    }
    public function kokiePlaukai() {
      echo $this->plaukuSpalva . "<br />";
    }
}

$Jonas = new B();

echo $Jonas->statusas . "<br />";
echo $Jonas->name . "<br />";
$Jonas->kokiePlaukai();
$Jonas->paveldetaYda();
