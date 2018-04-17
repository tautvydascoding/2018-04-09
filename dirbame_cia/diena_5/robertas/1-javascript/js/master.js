const NO_MONTHS_IN_YEAR = 12;

var vardas = "Robertas";
var pavarde = "Rudys";
var amzius = 21;
var atlyginimas = 1000;

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Kursiu g. 7";
var pastoKodas = "00111";

var addressData = [salis, miestas, adresas, pastoKodas];

function printVardasPavardeAmzius() {
  console.log(vardas, pavarde, amzius);
}

function printMetinisPajamuDydis() {
  console.log(NO_MONTHS_IN_YEAR * atlyginimas);
}

function printAddressData() {
  var output = "";
  for (var i = 0; i < addressData.length; i++) {
    output += addressData[i];
    if (!(i < addressData.length - 1)) output += ", ";
  }

  console.log(output);
}

function printTekstas(x) {
  console.log(x);
}

function daugyba(x, y) {
  return x * y;
}

function pitagoroTeorema(x, y) {
  return Math.sqrt(x * x + y * y);
}

printVardasPavardeAmzius();
printMetinisPajamuDydis();
printAddressData();
printTekstas("Jokubo istorijos");
printTekstas(daugyba(2, 6));
printTekstas(pitagoroTeorema(2, 3));

//document.getElementById("demo").innerHTML = text;
