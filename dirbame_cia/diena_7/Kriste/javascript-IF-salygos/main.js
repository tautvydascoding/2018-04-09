console.log( "labas as cia" );


// =================if  teorija====================
//
// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }
//
//
// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }

// amzinai, kad darytu salyg1, tai gali rasyti:
// if (true) {
// console.log("Labas");
// }

var age = 56;
if ( age > 40 ) {
  console.log("Labas");
  // if (condition) {
  //
  // }
  // console.log("Iki");
}
// iki situ skliaustu viskas bus vykdoma. i vidu galima rasytu if funkciju kiek nori.
else if (salyga) {

} else {
    // ?
}

var x = "Tomas";

if (x == "Mark") {
  console.log("Labas Markai");
}
else {
  console.log("Labas nepazistamasis");
}


var x = "Paulius";

if (x == "Mark") {
  console.log("Labas Markai");
}
else if (x == "Paulius") {
  console.log("Labas Pauliau");
}
else {
  console.log("Labas nepazistamasis");
}





//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";

if (vardas1 == vardas2) {
  console.log("Vardai sutampa");
}
else {
  console.log("Vardai yra skirtingi");
}



// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// var vardas1 = "Tomas";
// var vardas2 = "Antanas";
// kadangi jau var sukurti, tai juos iki failo apacios galiu naudoti, i nera butina ju kurti ar perrasyti is naujo;

if (vardas1 == vardas2) {
  console.log("Vardai sutampa");
}
else {
  console.log("Vardai yra skirtingi");
  if (vardas1 == "Tomas"){
    console.log("Labas Tomai");
  }
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// && - IR;

// var vardas1 = "Tomas";
// var vardas2 = "Antanas";
// kadangi jau var sukurti, tai juos iki failo apacios galiu naudoti, i nera butina ju kurti ar perrasyti is naujo;

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  console.log("Vardai vienodi");
}
else {
  console.log("Vardai nera vienodi");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

// var vardas1 = "Tomas";
// var vardas2 = "Antanas";
// kadangi jau var sukurti, tai juos iki failo apacios galiu naudoti, i nera butina ju kurti ar perrasyti is naujo;

if (vardas1 || vardas2 == "Tomas") {
  console.log("Sveikas Tomai");
}

// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

// iki 7 metu
// "Pliusines varles"
//
// nuo 7 iki 14
// "Mini telefonai"
//
// nuo 14 iki 18
// "new Music App"
//
// nuo 18 iki 24
// "Stok i sauliu sajunga"
//
// nuo 24 iki 65
// "Pensijos kaupimas - zusiregistruok"

// nuo 65
// "kelione i Bristona"



var age = 24;

if (age < 7) {
  console.log("Pliusines varles");
}
else if (age >= 7 && age < 14 ) {
  console.log("Mini telefonai");
}

// else if (age < 14 ) {
//   console.log("Mini telefonai");
// }
// buvo galima ir sitaip rasyti, nes suveikus pirmai salygai, toliau salygos neveiks. todel galimas toks gudravimas. nes sita salyga suveiks realiai tarp intervalu 7-14. nes jei bus amzius 6, tai suveiks pirmoji salyga, o antra jau nebeveiks;

else if (age >= 14 && age < 18 ) {
  console.log("new Music App");
}
else if (age >= 18 && age < 24 ){
  console.log("Stok i Sauliu Sajunga");
}
else if (age >= 24 && age < 65) {
  console.log("Pensijos kaupimas - uzsiregistruok");
}
else if (age > 65) {
  console.log("kelione i Birstona");
}


var amzius = 24;
if (24 <= amzius < 65) {
  console.log("Sugalvojau antra intervalu rasymo buda");
}

// sunkesne:
// iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

var age = 68;

if (age < 7 || age > 65 ) {
  console.log("Sokoladiniai zuikuciai 20% nuolaida");
  if (age <7 ) {
    console.log("Pliusines varles");
  }
  else {
    console.log("Kelione i Birstona");
  }
}


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas = "Airidas";

if ( vardas == "Tomas" ) {
  console.log("Masinoms 10% nuolaida");
}
else if ( vardas == "Paulius" ) {
  console.log("Buitinei technikai 30% nuolaida");
}
else {
  console.log("5% nuolaida kelionems");
}

// kitas budas

var name1 = "Tomas";
var name2 = "Paulius";
var name3 = "Airidas";
var klientas = "Petras";
// ties klientu keiciamas vardas ir pagal tai ismeta jam priskirta teksta;

if (klientas == name1 ) {
  console.log("nuolaida1");
}
else if (klientas == name2) {
  console.log("nuolaida2");
}
else {
  console.log("nuolaida3");
}

// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"
// parasyti koda, kuris patikris ar prisijunges vartotojas - sekmes atveju - pasisveikins su jo vardu. Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoji paveiksliuka

var arPrisijunges = "taip";
var vartotojoTipas = "subscriber";
var userName = "Antanas Antanaitis";

if ( arPrisijunges == "taip" ) {
  console.log("Sveiki prisijunge,", userName, "!");

  if (vartotojoTipas == "moderator") {
    console.log("vienoks paveiksliukas");
  }
  else if (vartotojoTipas == "subscriber") {
    console.log("parodo kitoki paveiksliuka");
  }
  
}
