console.log("testukas");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas



var vardas = "Vaidotas";
var pavarde = "Vaitasius";
var amzius = 26;
var atlyginimas = 640;


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa

console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius(){
  console.log(vardas);
  console.log(pavarde);
  console.log(amzius);
  console.log(vardas+" "+pavarde+", "+amzius+" metu jaunuolis.");
}

printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDysis() {
  console.log(12 * atlyginimas);
  //arba
  // var metinis = atlyginimas * 12; // lokalus kintamas sunaikinamas funkcijai baigiantis
  // console.log(metinis);
}

printMetinisPajamuDysis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Varnių 37";
var pastoKodas = 48416;

//arba

//var salis = "Lietuva",
//   miestas = "Kaunas",
//   adresas = "Varnių 37",
//   pastoKodas = 48416;




function printAddressData(){
  console.log("Adresas yra: "+adresas+", "+miestas+", "+salis+". Pasto kodas: "+pastoKodas);
  }
printAddressData();





// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x){
 console.log(x);
}

printTekstas("Jokubo istorijos");


// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba(x,y){
var dauginimas = x * y;
console.log(dauginimas);
}

daugyba(5,5);



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function  pitagoroTeorema(x, y) {
var ilgosKrastinesIlgis = Math.sqrt(Math.pow(x,2)+Math.pow(y,2));
console.log(ilgosKrastinesIlgis);
}
console.log("pitagoroTeorema");
pitagoroTeorema(3,4);


//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
