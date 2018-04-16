console.log("Labas rytas");

// Kintamieji
var pasisveikinimas = "Labas rytas!";
var atsisveikinimas = "Viso gero!";
var namoAukstuSkaicius = 3;
var butuSkaicius = 150;
var pirmininkas = "Petras Petrauskas";
pirmininkas = "Genute";
console.log( pirmininkas );

var butuSkaiciusAukste = 150 / 3;
// antras galimas budas:
var butuSkaiciusAukste2variantas = butuSkaicius / namoAukstuSkaicius;
console.log(butuSkaiciusAukste);
// antru variantu skaicius tas pats-patikriname:
console.log(butuSkaiciusAukste2variantas);

var butuSkaiciusAukste3variantas = 150 / 3 + 2 * 3;
console.log(butuSkaiciusAukste3variantas);

// Funkcijos sukurimas, pvz.
function printPirmininkas () {
  console.log( pirmininkas );
}

// Funkcijos paleidimas, pvz.
printPirmininkas();
printPirmininkas();

// bandau funkcijas :)
function parasytiButuSkaiciu () {
  console.log( butuSkaiciusAukste );
}
parasytiButuSkaiciu();

function pasisveikinti () {
  console.log( pasisveikinimas );
}
pasisveikinti();

function atsisveikinti () {
  console.log( atsisveikinimas );
}
atsisveikinti();
