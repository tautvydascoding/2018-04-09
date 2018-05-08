<!-- // UZDUOTIS:
// 1. sukurti dvi klases A ir B
// "B" klase turi paveldi "A"
// "A" klase turi kintamuosius:
// name , plaukuSpalva, sirdiesYda
// kurie yra "public", "private", "protected"

// 2. SUSIKURTI "B" objekta
// 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje) -->

<?php


class A {
  private $name = "Tomas";
  public $plaukuSpalva = "Geltona";
  protected $sirdiesYda = "E259";

  public function test() {
    echo $this->plaukuSpalva ." <br />" ; // atspausdina
    echo $this->name ." <br />" ; // atspausdina
    echo $this->sirdiesYda ." <br />" ; // atspausdina
  }
}

// $zmogus1 = new A();
// echo $zmogus1->plaukuSpalva ." <br />" ; // atspausdina geltona
// // echo $zmogus1->name ." <br />" ; // Fatal error: Uncaught Error: Cannot access private property A::$name
// // echo $zmogus1->sirdiesYda ." <br />" ; // Fatal error: Uncaught Error: Cannot access protected property A::$sirdiesYda
//
// $zmogus1->test();

class B extends A {
  function test() {
    echo "Test";
  }
}

$zmogus9 = new B();

echo $zmogus9->plaukuSpalva ." <br />" ;
// echo $zmogus9->name ." <br />" ; // Notice: Undefined property: B::$name
// echo $zmogus9->sirdiesYda ." <br />" ; // Fatal error: Uncaught Error: Cannot access protected property B::$sirdiesYda i
$zmogus9->test(); // atsakymas - isves zodi Test is B clases funkcijos; nes is pradziu B paieskos pas save, o tik tada eis i A;
