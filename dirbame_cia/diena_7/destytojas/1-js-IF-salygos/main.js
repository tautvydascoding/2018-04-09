console.log( "labas as cia" );


// =================if  teorija====================

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// var age = 56;
// if ( age > 40) {
//     console.log("labas ");
//     if (condition) {
//
//     }
//     console.log("...");
//
// } else if (salyga) {
//
// } else  if (salyga) {
//
// }

if ( true ) {
    console.log("visada true");
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
if (  vardas1 == vardas2 ) {
    console.log( " vardai yra vienodi   ");
} else {
    console.log( "vardai" + "nesutampa ");
}

// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if( vardas1 == "Tomas") {
    console.log( " Labas Tomai!!! ");
}
// C)
// Patikrinti ar vardas1 yra "Tomas", IR butinai vardas2  yra "Karolis"
vardas1 = "Tomas";
vardas2 = "Karolis";
if ( vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log( " Labas Karoli ir Tomai: " , vardas1, vardas2   );
} else {
    console.log( vardas1, vardas2 );
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
if ( vardas1 == 'Tomas' || vardas2 == 'Tomas') {
    console.log( "Turime bent viena toma");
}


// 1 UZDUOTIS
// turesime vartotojo amziu
var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

// Salygos:
var age = 20;
console.log( "Kliento amzius", age );

// if (age < 7) {
//     console.log( "Pliusines varles" );
// } else if ( age < 14) {
//     console.log( "Mini telefonai");
// } else if ( age >= 14 && age < 18) {
//     console.log( "new Music App");
// } else if ( age >= 18 && age < 24) {
//     console.log("Stok i sauliu sajunga");
// } else if ( age >= 24 && age < 65) {
//     console.log("Pensijos kaupimas - zusiregistruok");
// }

// sunkesnis
age = 99;
if (age < 7 || age > 65) {
    console.log( "Sokoladiniai zuikuciai 20% nuolaida" );
    if (age < 7) {
        console.log('pliusines varles');
    } else {
        console.log('kelione i Birstona');
    }
} else if ( age < 14) {
    console.log( "Mini telefonai");
} else if ( age >= 14 && age < 18) {
    console.log( "new Music App");
} else if ( age >= 18 && age < 24) {
    console.log("Stok i sauliu sajunga");
} else if ( age >= 24 && age < 65) {
    console.log("Pensijos kaupimas - zusiregistruok");
}
// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"



// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// susikurti kintamaji 'klietas' - kurio reiksme lyginsime su vardais
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
var name1 = 'Tomas';
var name2 = "Paulius";
var name3 = 'Airidas';
var klientas = 'Paulius'; //

if (  klientas == name1 ) {
    console.log("Masinoms 10% nuolaida");
} else if ( klientas == name2) {
        console.log("Buitinei technikai  30% nuolaida");
}  else   {
        console.log("5% nuolaida kelionems");
}

// 4 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "

// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"
// parasyti koda, kuris patikris ar prisijunges vartotojas - sekmes atveju - pasisveikins su jo vardu. Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoji paveiksliuka



//