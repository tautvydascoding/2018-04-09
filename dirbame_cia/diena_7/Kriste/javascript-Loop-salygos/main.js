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
  console.log("Azuolas");
}
// cia isveda vienoje eiluteje su skaiciumi, kad 50 kartu azuolai

for (var i = 0; i < 5; i++) {
  console.log("Azuolas", i );
}
// tada parasys atskiromis eilutemis, nes i visada bus skirtingas;


// 1.1. - isvesti i ekrana
//

// document.write( "<h3> mano tekstas </h3>");
//  sitos reiktu nenaudoti, nes isveda bet kur;

document.querySelector("article");
// querySelector funkcija - iesko elemento arba klases, arba id. tai daro html faile;

// galima isitikinti ar mums pavyko;
var x = document.querySelector("article");
console.log( x ); // tekstas, kuri matysime consoleje

// innerHTML funkcija - keicia vidu
x.innerHTML = "pakeistas teksas su js";
//  nes x yra lygus article. tai as arctikle pakeiciau

x.innerHTML += " gana sunku";
// su zenkliuku += mes pridedame teksta salia, t.y. nepakeiciame artickle reiksmes i kita. o tiesiog prie esamos article reiksmes pridedame dar papildoma teksta;




// 1.2 UZDUOTIS
// isvesti 5 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

for(var i = 0; i < 5; i++ ) {
  x.innerHTML += "<h2> Azuolas </h2>";
}
// += tam kad pridetu nauja turini;
// nes jei paliktum tik =, tai tada isitrintu ir uzsirasytu is naujo tekstas;


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)

function printX(xx) {

}
printX(x.innerHTML += "Sukurta funkcija print");

// kitas budas

function printXX(x) {
  // document.write(x);
// document write geriau nenaudoti
  document.querySelector("section").innerHTML += x;
}
var text = "<p class='bg-info'>  naujas tekstas </p>";
printXX(text);
printXX("<b> Antraste </b>");


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 5 kartu

for( var i = 0; i < 5; i++ ) {
  printXX( "<b>" + i + "Antraste </b>" );
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 5 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

function printXX(xx) {
  document.querySelector('.galerija').innerHTML += xx;
}
// jis neveiks kol neiskviesi. cia tik receptas kolkas;

// nuotrauka yra tiesiog bukas tekstas - string. tik idejus i html ji supras kaip coda;
var nuotrauka = " <img src='1.png'  alt='foto'> ";
for(var i = 0; i < 2; i++ ) {
  printXX( nuotrauka );
}


// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)
//hint - kokio ilgio ir koks simbolis. du for ciklai

// mano budas
// function piestiEilute(x) {
//   document.querySelector('section').innerHTML += x;
// }
// var simbolis = "-";
//   for(var i = 0; i<20; i++ ) {
//   piestiEilute(simbolis);
// }

// destytojo budas
function piestiEilute1( ilgis ) {
  var eilute = "-";
  for(var i = 0; i < ilgis; i++) {
    eilute += "-";
  }
  console.log( eilute );
}
piestiEilute1(33);
console.log("vardas   |  pavarde   |   amzius");
piestiEilute1(33);






// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
//
//
//


 // advance
// // 5 UZDUOTIS
// // sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
