 <?php 

 class A {
    public $name = "Ona";
    private $plaukuSpalva = "Raudona";
    protected $sirdiesYda = "Skauda";
    public function getPrivate() {
        echo $this->plaukuSpalva;
    }
 }

class B extends A {

    public function getProtected() {
        echo $this->sirdiesYda;
    }
}


$objektas = new B();
echo $objektas->name;
$objektas->getPrivate();
$objektas->getProtected();



 // UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"
 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje)
