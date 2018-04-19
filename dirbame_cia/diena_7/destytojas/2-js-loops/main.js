console.log( "labas as cia" );


//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (var i = 0; i < 50; i++) {
    console.log( "Azuolas ", i );
}

// 1.1 UZDUOTIS
document.write( "<h3> mano tekstas </h3> ");

// querySelector - iesko elemnto/class/id     HTML faile
var x = document.querySelector('article');
// console.log( x );  // tekstas
x.innerHTML = "<h2> Pakeistas tekstas su js </h2>";

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// for( var i = 0; i < 20; i++) {
//     // i '<article>' vidu idedam 20-simt tekstu
//     x.innerHTML += "<h2> Su FOR ciklu </h2>";
//     // "+="  prie jau esamo turinio prideda nauja
// }

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)

function printX( xx ) {
    // document.write( xx ); // isvedu i ekrana
    // isvedu i ekrana ( i section elementa)
    document.querySelector('section').innerHTML += xx;
}
var text = " <p class='bg-info'>    Tekstas </p> ";  // tiesiog String
printX( text );
printX( "<b>Antraste</b>" );
printX( "<h1>Pagrindine antraste </h1>" );

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for(var i = 0; i < 100; i++) {
    printX(   "<b>" + i + "Antraste </b>"  );
}
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
var kiekMenesiu = 10 * 12;
var menAtlyginimas = 680;
var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
