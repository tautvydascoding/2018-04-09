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

// for (var i = 0; i < 50; i++) {
//   console.log("Azuolas", i);
//   }

//1.1 uzduotis atspausdinti i ekrana

//document.write("<h3> Random tekstas </h3>");

// var x = document.querySelector('article'); // iesko pirmo pasitaikiusio ivardinto elemento HTML faile.
// console.log( x ); //tekstas
//
// x.innerHTML += "<h2> Pakeistas tekstas su js </h2>";

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// for (var i = 0; i < 5; i++) {
//   document.querySelector('article').innerHTML+="<h2> su For ciklu </h2>"; // i article vidu irasau texta 50 kartu
// }



// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)

// function printX(xx) {
//   document.querySelector('section').innerHTML+=xx; // isvedu i section dali
// }
// var text = "<p class='bg-info'> tekstas <p>" ;
// printX(text);



// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

// for (var i = 0; i < 100; i++) {
//   printX("<b>"+(i+1)+" Antraste </b><br>");
// }

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius
// function printX(xx){
//   document.querySelector('.galerija').innerHTML += xx;
// }
// var nuotrauka = "<img src='balionas.png' alt='cia balionas' width='12.5%'>";
//
// for (var i = 0; i < 12; i++) {
//   printX(nuotrauka);
// }

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// function piestiEilute(x){
//   for (var i = 0; i < x ; i++) {
//   document.querySelector('h2').innerHTML += "_";
//   }
// }
//
// function piestiStulpeli(x){
//   for (var i = 0; i < x ; i++) {
//   document.querySelector('h2').innerHTML += "|<br>";
//   }
// }
// var luzis = "<br>";
//
// function teksto_rasymas(x) {
//   document.querySelector('h2').innerHTML += x;
// }
// piestiEilute(28);
// teksto_rasymas(luzis);
// teksto_rasymas("vardas / pavarde / amzius ");
// piestiEilute(28);
// teksto_rasymas(luzis);
// piestiStulpeli(5);



function piestiEilute( ilgis ){
  var eilute = "";
  for (var i = 0; i < ilgis ; i++) {
    eilute += "_";
    }
    console.log( eilute);
}

piestiEilute(20);
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
