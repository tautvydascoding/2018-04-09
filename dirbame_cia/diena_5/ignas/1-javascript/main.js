console.log("labas");


var namoAukstuSkaicius = 3;
var butuSkaicius = 9;
var pirmininkas = "Petras Petrauskas";

pirmininkas = "Genute";

console.log( pirmininkas );

var butuSkaiciusAukste = ( 9 / 3 ) + 3 * 4;
// arba geriau: var butuSkaiciusAukste = butuSkaicius / namoAukstuSkaicius;

console.log( butuSkaiciusAukste );


// funkcijos sukurimas

function pavadinimasAtspausdintiPirmininka() {
  console.log( pirmininkas );
}

// funkcijos paleidimas
pavadinimasAtspausdintiPirmininka();

function butuSkaicius1() {
  console.log( butuSkaicius );
}
butuSkaicius1();

/* --------------------- 1 uzduotis --------------------*/

var vardas = "Ignas";
var pavarde = "Radzius";
var amzius = "26 metai";
var atlyginimas = 250;

console.log( typeof vardas);
// arba var x = typeof ( vardas );
// console.log( x );

// -------------------- 2 uzduotis -----------------------


function printVardasPavardeAmzius() {
  console.log( vardas, pavarde, amzius );
}
printVardasPavardeAmzius();

// ------------------- 3 uzduotis ------------------------


function printMetinisPajamuDydis() {
  console.log( atlyginimas * 12 );
  // arba var metinis = atlyginimas * 12;
  // console.log( metinis );
  // pvz: metinis kintamasis yra lokalus sitai funkcijai, ir uz jos neveiks.
}
printMetinisPajamuDydis();
printMetinisPajamuDydis();
printMetinisPajamuDydis();

// ------------------ 4 uzduotis ---------------


var salis = "Lietuva",
    miestas = "Kaunas",
    adresas = "Sajungos a.",
    pastoKodas = "11111";

function printAddressData() {
  console.log( salis, miestas, adresas, pastoKodas );
}
printAddressData();

// ------------------- 5 uzduotis -------------------


function printTekstas( x ) {
  console.log( x );
}
printTekstas( "Jokubo istorijos" );

// ----------------- 6 uzduotis ---------------------


function daugyba( x, y ) {
  console.log( x * y );
}
daugyba( 5, 2 );
daugyba( 5, 5 );
daugyba( 5, 12 );

// -------------- 7 uzduotis -----------------------


function pitagoroTeorema( x, y ) {
  console.log( Math.sqrt (x * x + y * y) );
}
pitagoroTeorema( 2, 3 );
