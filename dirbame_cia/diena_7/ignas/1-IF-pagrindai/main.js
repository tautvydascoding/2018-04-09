console.log("labas as cia");

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
vardas2 = "Antanas";
if (vardas1 == vardas2) {
  console.log("Vardai sutampa");
} else {
  console.log("Vardai nesutampa");
}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
  console.log("Labas, Tomai!");
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  console.log("Vardai teisingi");
} else {
  console.log("Vardai neteisingi");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

if (vardas1 == "Tomas" || vardas2 == "Karolis") {
  console.log("Vienas is vardu yra Tomas");
} else {
  console.log("Nera Tomo");
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
// sunkesne:
// iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

var age = 24;

if (age <= 7) { //age < 7
  console.log("Pliusines varles!");
} else if (age > 7 && age <= 14) { //age < 14
  console.log("Mini telefonai");
} else if (age > 14 && age <= 18) { //age < 18
  console.log("new Music App");
} else if (age > 18 && age <= 24) { //age < 24
  console.log("Stok i sauliu sajunga");
} else if (age > 24 && age <= 65) { //age < 65
  console.log("Pensijos kaupimas - uzsiregistruok");
} else if (age > 65) {
  console.log("kelione i Birstona");
} else {
  console.log("Jums reklamos nebus");
}

if (age <= 7 || age >= 65) {
  console.log("Sokoladiniai zuikuciai 20% nuolaida");
}


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas1 = "Tomas";
    vardas2 = "Paulius";
    vardas3 = "Airidas";
    klientas = "Paulius";

if ( klientas == vardas1 ) {
  console.log("Masinoms 10% nuolaida");
} else if ( klientas == vardas2 ) {
    console.log("Buitinei technikai 30% nuolaida");
} else {
  console.log("5% nuolaida kelionems");
}


// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"
// parasyti koda, kuris patikris ar prisijunges vartotojas - sekmes atveju - pasisveikins su jo vardu. Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoji paveiksliuka

var arPrisijunges
    vartotojoTipas
    userName






//
