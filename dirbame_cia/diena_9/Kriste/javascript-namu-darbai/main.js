console.log( "labas as cia" );

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis

var sukurtasMasyvas = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

// ) sunaikinti pirma STALCIU VISA

sukurtasMasyvas.shift();
console.log( "po shift komandos:" , sukurtasMasyvas );

// ) tarp Petras ir Povilas, iterpti Marija

sukurtasMasyvas.splice(1, 0, "Marija");
console.log( "po splice komandos:", sukurtasMasyvas );

// ) surikiuoti Masyvai
// ) sunaikinti Marijos stalciu

sukurtasMasyvas.splice(1, 1);
console.log( "istryniau Marija:", sukurtasMasyvas);

// ) sukeisti vietomis pirma ir paskutini stalciu

var uzsaugojuReiksme = sukurtasMasyvas[3];
sukurtasMasyvas[3] = sukurtasMasyvas[0];
sukurtasMasyvas[0] = uzsaugojuReiksme;
console.log( "sukeiciau paskutini su pirmu:" , sukurtasMasyvas);

// ) sukurti masyvo kojipa

var kopija = sukurtasMasyvas.slice(0);
console.log( "sukuriau kopija:", kopija );

// ) kopijos masyve istrinti nuo 2 iki 4

kopija.splice(2, 2);
console.log( "is kopijos istryniau du objektus:", kopija );

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija

console.log( "tikrinu ar nesugadinau originalo:", sukurtasMasyvas );

// ) prijungti kopijos masyva prie orginalo masyvos galo

var sujungtiMasyvai = sukurtasMasyvas.concat(kopija);
console.log( "ar gavosis sujungti?:", sujungtiMasyvai );


// 6. sukurti du masyvus (skirtingus)

var valstybe = ["Lietuva", "Latvija", "Estija", "Lenkija", "Italija"];
var spalvos = ["juoda", "balta", "geltona", "zalia", "rozine"];

// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
//
// for (var i = 0; i < valstybe.concat(spalvos).length; i++) {
//   if (i % 2 === 0) {
//     console.log( "parodyk, kas gavosi!!!:", valstybe[i], spalvos[i] );
//   }
// }
// // NOTE: man kazkodel ismeta undefined du kartus..

// sunkesnis
// susikurti masyva su prekiu pavadinimais

var prekes = ["kirvis", "plaktukas", "sketis", "burokelis", "kojines", "stikline"];

// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

//
// for (var i = 1; i < prekes.length; i++) {
// //  prekes.splice(0, 0, prekes[i]);
// }
// console.log( "bandau", prekes);
//// NOTE: nesigauna pagal mano logika..

//

// UZDUOTIS
//   sukurti nauja masyva: uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)



//======================TEKSTO ISVEDIMAS i DOM===============

//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai",  "Vasaros vis salteja"

function printAntraste(x) {
  var printAntraste = x;
  console.log( printAntraste );
  document.querySelector('h1').innerHTML = printAntraste;
}
printAntraste( "BMW pinga, nes daugeja");
printAntraste( "Greik pageres orai");
printAntraste( "Vasaros vis salteja");



//=======================================
