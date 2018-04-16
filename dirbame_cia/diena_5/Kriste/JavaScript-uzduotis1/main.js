console.log("Sveikuciai");

// //  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

var vardas = "Kriste";
var pavarde = "Sia";
var amzius = 30;
var atlyginimas = 2000;

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa

// typeof parodo koks tipas, bet ta komanda reikia rasyti i log.console komandos vidu.
console.log(typeof vardas );
console.log(typeof amzius );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
  console.log( vardas, pavarde, amzius );
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDysis() {
  console.log( atlyginimas * 12 );
}
printMetinisPajamuDysis();

// galejau sukurti ir var viduje funkcijos, bet tada tas var gyvas yra tik funkcijos viduje. jeigu as ji bandysiu panaudoti veliau kazkur - jis neveiks. Pvz zemiau;

    // function printMetinisPajamuDydis() {
    //   var metinis = atlyginimas * 12;
    //   console.log( metinis );
    // }
    // printMetinisPajamuDydis();


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// galima kurti var per kableli, tada nereikia vis rasyti var. BET paskutinis kintamasis turi BUTINAI buti su kabliataskiu!!!!
var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "S.Ciurlionienes 6",
    pastoKodas = "LT-50346";

function printAddressData() {
  console.log( salis, miestas, adresas, pastoKodas);
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

// galima laukiamo teksto, tokio kaip x, dar per kableli isvardinti ir daugiau. bet patartina ne daugiau triju;
// x siuo atveju yra laikinas (local) issigalvotas kintamasis. ir jis veikia tik funkcijos viduje. ta prasme, kad jei mes butume panaudoje anksciau var x = aaa, tai sitas musu x bus visai kitos reiksmes, t.y. butent tokios kokia jam duosime funkcijos viduje;

function printTekstas(x) {
  console.log(x);
}
printTekstas( "Jokubo kelias" );

// antras variantas, sunkesnis-matysime ka kur irasius- kas gaunasi;

function printTekstas( reiksme ) {
  console.log( "paduota reiksme" );
  console.log( reiksme );
}
printTekstas( "Jokubo kelias" );


// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba() {
  console.log( amzius * atlyginimas );
}
daugyba();

function daugyba2(z, k) {
  console.log( z * k );
}
daugyba2( 90, 11 );
// galima vienu kartu paleisti funkcija su skirtingomis reiksmemis!
daugyba2( 3, 3 );
daugyba2( 5, 5 );

function daugyba2(z, k) {
// arba kitaip dar buvo galima- ilgesniu keliu
  var atsakymas = z * k ;
  console.log( atsakymas );
}
daugyba2( 90, 11 );


// as galejau is pradziu susikurti visas funkcijas ir tik po to jas paleisti. Bet skaityti koda taip butu sunkiau.
      // printAddressData();
      // daugyba();

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema = z)
// pitagoroTeorema(x, y)  z = saknis is   x*x + y*y

function pitagoroTeorema() {
  var x = 10;
  var y = 20;
  console.log( x*x + y*y );
}
pitagoroTeorema();

// galima ir kitu budu, tada pakeitus duomenis tau visada skaiciuos.;


function pitagoroTeorema1( a, b ) {
  var krastine3 = Math.sqrt (a*a + b*b);
  console.log( krastine3 );
}
pitagoroTeorema1( 14, 20 );
pitagoroTeorema1( 19, 39 );
// galiu funkcija paleisti su kitais skaiciais.pvz;

// cia ismes klaida, nes as naudoju teksta darydama matematinius veiksmus. Inspect ismes - NaN (tos trys raides reiskia sutrumpinima is not a number)
pitagoroTeorema1( "petras", 39 );

// cia ismes klaida, nes tokio variable kaip pitagoroTeorema9999 nera aplamai. Inspect ismes - Is not defined.
pitagoroTeorema9999( 15, 33);
