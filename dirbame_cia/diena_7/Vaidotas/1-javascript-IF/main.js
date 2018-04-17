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
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }
// var age = 56;
// var gender = "Male";
// if (age > 40) {
//   console.log("Labas    ");
//   if (gender = "Male") {
//     console.log("Labas   vyre");
//       }
//   else {
//     console.log("Škac, moterie");
//       }
// else {
//   console.log("Užauk, pagaliau");
//
// }




//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
// var vardas1 = "Tadas";
// var vardas2 = "Petras";
//
// if ( vardas1 == vardas2) {
//   console.log("Vardai yra vienodi.");
// } else {
//   console.log("Vardai nesutampa");
// }





// B)
// Papildomai patikrinti uzdavini A.
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
// if (vardas1 == "Tomas"){
//   console.log("Labas, Tomai!!!");
// }

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// if (vardas1 == "Tomas" && vardas2 == "Karolis") {
//   console.log("Labas, Tomai ir Karoli");
// } else {
//   console.log("Vardai nera Tomas ir Karolis, vardai yra: \\"+vardas1+" ir "+vardas2);
// }

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

// if (vardas1 == "Tomas" || vardas2 == "Tomas") {
//   console.log("Bent vienas vardas buvo Tomas");
// }
// else {
//   console.log("Nera nei vieno Tomo!");
// }


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
console.log("Kliento amzius: "+ age);

// if (age < 7) {
//   console.log("Pliusines varles");
// }
//     else if (age < 14) {
//       console.log("new Music App");
//     }
//     else if (age < 18) {
//       console.log("Mini telefonai");
//     }
//     else if (age < 24) {
//       console.log("Stok i sauliu sajunga");
//     }
//     else if (age < 65) {
//       console.log("Pensijos kaupimas - uzsiregistruok");
//     }
//     else if (age >= 65) {
//       console.log("Kelione i Birstona");
//     }
//
// if (age < 7 || age >= 65) {
//     console.log("Sokoladiniai zuikuciai su 20% nuolaida");
// }

// ---------------------arba galima kitaip daryt------------------------------
if (age < 7|| age >=65) {
  console.log("Sokoladiniai zuikuciai su 20% nuolaida");
  if (age < 7) {
    console.log("Pliusines varles");
    }
  else {
      console.log("Kelione i Birstona");
    }
}
else if (age >= 7 && age < 14) {
  console.log("new Music App");
}
else if (age >= 14 && age <18) {
  console.log("Mini telefonai");
}
else if (age >= 18 &&  age < 24) {
  console.log("Stok i sauliu sajunga");
}
else if (age >= 24 && age < 65) {
  console.log("Pensijos kaupimas - uzsiregistruok");
}





// 2 UZDUOTIS
var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";
//---------------mano sprendimas

// function ifas (x) {
//   if (x == vardas1) {
//     console.log("Masinoms 10% nuolaida");
//     }
//     else if (x == vardas2) {
//     console.log("Buitinei technikai 30% nuolaida");
//     }
//     else {
//     console.log("5% nuolaida kelionems");
//     }
// }
// ifas("Tomas");

//-------siulomas sprendimas
var klientas = "Paulius";
if (klientas == vardas1){
  console.log("Masinoms 10% nuolaida");
} else if (klientas == vardas2) {
  console.log("Buitinei technikai 30%");
} else {
  console.log("5% nuolaida kelionems");
}




// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// 3 UZDUOTIS

// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"
// parasyti koda, kuris patikris ar prisijunges vartotojas - sekmes atveju - pasisveikins su jo vardu. Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoji paveiksliuka
