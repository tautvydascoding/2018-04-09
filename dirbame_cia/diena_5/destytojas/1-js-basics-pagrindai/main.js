console.log( "labas as cia" );

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas


// var   vardas = "Tomas",
//       pavarde = "TOmauskas",
//       amzius = 21,
//       atlyginimas = 560;

var vardas = "Tomas";
var pavarde = "Tomauskas";
var amzius = 28;
var atlyginimas = 1560;
var gg;

// teo:
//  typeof( vardas ); f-ja kuri isveda kintamojo tipa
var x =  typeof( atlyginimas );
console.log( x );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

// f-jos sukurimas (NOTE: ji vieks tik kai iskviesite ja)
function printVardasPavardeAmzius()  {
    console.log(  vardas, pavarde, amzius, atlyginimas  );
}
// f-jos iskvietimas
printVardasPavardeAmzius();
printVardasPavardeAmzius();



//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    // console.log(  atlyginimas * 12 );
    // arba
    var metinis = atlyginimas * 12;  // local
    console.log( metinis );
}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius



// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas( reiksme ) {
    console.log( "paduota reiksme:" );
    console.log( reiksme );
}
printTekstas(   "Jokubo istorijos"  );


// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba( z, k) {
    var atsakymas = z * k;
    console.log( atsakymas );
}

daugyba( 90, 11 );
daugyba( 3, 987 );
daugyba( 0.3, 0.5 );


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)     saknis ( x*x + y*y )

// krastine1 = 21;
// krastine2 = 10;
// krastine3 = ??
function pitagoroTeorema( a, b) {
    var krastine3 =   Math.sqrt(a*a + b*b);
    console.log(   krastine3 );
}

pitagoroTeorema( 3, 4);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
