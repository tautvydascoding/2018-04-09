console.log( "labas as cia" );


// // NOTE: scope yra tik funkcijose. niekur kitur NERA!!!!!!!!

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja


  function printDuomenys() {
    var vardas = "Tomas"; // kai var yra funkcijos viduje, tai kintamasis var yra LOCAL!!! kintamasis tik funkcijos viduje galios- jis uz funkcijos ribu nebus aktyvus;
    console.log( vardas );
    document.querySelector("h1").innerHTML = vardas;
  }
  printDuomenys();



  // /   UZDUOTIS  B
  //  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
  //  console.log( vardas) ;
  // NOTE: gausite klaida ""is not defined""

    // !!!!! svarbu
    // console.log( vardas ); // jeigu mes isvedame su console log kintamaji vardas- tai mums nieko neisveda, nes po funkcijos skliaustu uzdarymo, kintamasis vardas nebegalioja!!! butent del to, kad jis Localus;



//================local && global=========

var x = "x global"; // GLOBAL

function testLocalVar() {
   var y = "y local"; // LOCAL
   z = "z global"; // !!!!!!jeigu neuzdedame var zodelio, tai net ir rasydami funkcijos viduje, mes vistiek sukuriame GLOBAL kintamaji!!!!!!
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
   // atspausdins visus
}

testLocalVar();
console.log("x", x); // atspausdins;
console.log("z", z); // atspausdins - z bus atspausdintas, net ir uz funkcijos ribu, nes sukurtas be zodzio var. ir del to jis tapo global!!!!
// console.log("y", y);  // neatspausdins - ERROR - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"



//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

var katinas = "juodas"; // global kintamasis;

function katinoSpalva() {
  var katinas = "baltas"; // local kintamasis;
  console.log( "funkcijos viduje", katinas ); // atspasudins baltas, nes spausdinimas funkcijos viduje, ir ima funkcijos viduje sukurta var, kuris yra LOCAL;
  document.querySelector("h1").innerHTML = katinas ;
}
katinoSpalva();
console.log( "funkcijos isoreje", katinas ); //atspasudins juodas, nes spausdinimas uz funkcijos ribu, ir ima funkcijos isoreje sukurta var, kuris yra GLOBAL;
document.querySelector("h2").innerHTML = katinas ;


// UZDUOTIS
 var katinasKitas = "juodas";   //global

 function test2() {
    var katinasKitas = "baltas";  // local
    console.log("1 katinas:", katinasKitas);
    console.log("2 this.katinas - f-jos viduje: ",  this.katinasKitas);    // this. - pasiekia ~global kintamuosius (tavo tecio kintamuosius). Islipa vienu funkcijos scope auksciau. siuo atveju paims auksciau sukurta global juoda katina;
    console.log("3 window.katinas - f-ijos viduje: ", window.katinasKitas ); // atspausdins juodas, nes window - teciu tetis;
 }
 test2();
 console.log("4 katinas:", katinasKitas); // atspausdins global - juodas- nes uz funkcijos ribu;



//==========================

 var xx = 10; // global

 function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis. tai realiai tai function isvesti (xx) = function isvesti ( var xx)!!
     var xx = 20;  // local. ir su situ xx deklaravimus, mes pakeiciame function isvesti (xx) - t1 butet (xx) reiksme. kompas skaito is virsaus i apacia; tai as iskviesdama komanda nurodziau, kad xx=912. tai is pradziu butu, kad xx=912. bet sekancia eilute var xx = 20, as pakeiciu xx reiksme i 20; ir del to cosole log atspausdins 20!!!
     console.log( "1. xx:", xx); // atspausdins 20
     console.log( "2. this.xx:",   this.xx); // atspausdins 10, nes islipa vienu scope auksciau ir pasiekia musu global kintamaji, kuris lygus 10;
 }
 isvesti(912);

 console.log( "3. xx:", xx); // atspausdins 10, nes teksto isvedimas yra uz funkcijos ribu ir tada paima global kintamaji;


 //======================
 var vardas = "Jonas";   // global - kintamasis
 function myName ( vardas ) { //  vardas - local kintamasis
     console.log( " vardas" + vardas); // atspausdins Petras
     document.querySelector("h1").innerHTML = "Klasioko vardas " + vardas + "." + "<br> Susipazinkime!";
     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius) // atspausdins Jonas;
 }
 myName("PETRAS");

 console.log(vardas); // atspausdins Jonas;
 document.querySelector("h2").innerHTML = vardas ;

//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"



//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================
