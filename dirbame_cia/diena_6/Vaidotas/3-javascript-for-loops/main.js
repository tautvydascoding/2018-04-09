console.log( "labas as cia" );

var izanga = "Senai senai....";
var destymas = "Lorem ipsum ";
var apibendrinimas = " Pabaiga, autorius xxx";

var knyga = izanga + " " + destymas + apibendrinimas + " 2018.04.16";
console.log(knyga);


var tekstas = "";
for ( var i = 0; i < 10; i++){
  tekstas = tekstas + "#";
  console.log( tekstas );
}//isveda daug kartu, kol vyksta for ciklas

console.log(tekstas); // isveda tik paskutini teksta, po ciklo veikimo.



//---------------for ciklas

for (var i = 0; i < 10; i++ ){
  console.log( "Azuolas "+ i);
  }


// javascripto kliurkos

// var x = "5"+ 2 + 3; // isves 523
// var x = 2 + 3 + "5";// isves 55
// var x = 3 * "20"; // isvess 60
// var x = 2 - "30";// isves -28
// var x = 2 * "30 aa";// isves Nan

var x = 3;
var y = 5;
var z = y % x; // 2, grazina liekana

var text = "Aldona \n \n nori pieno \"zemaitijos pienas\" ";
console.log(text);
// backslash ignoruoja super simboli
console.log("\\\\ ");
