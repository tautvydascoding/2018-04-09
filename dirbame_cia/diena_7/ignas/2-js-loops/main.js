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
  console.log( "Azuolas" );
}

// 1.1 UZDUOTIS

document.write( "<h3> mano tekstas <h3>");

var x =  document.querySelector("article"); //querySelector funkcija iesko elemento, klases arba id, HTML faile.
// console.log(x); //pasitikrinimas
x.innerHTML = "<h2> Pakeistas tekstas su js </h2>";

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

/*for (var i = 0; i < 50; i++) {
// var x yra document.querySelector("article"); ir panaudojam x.innerHTML. += leidzia matyti daugiau nei viena irasa.
  x.innerHTML += "<h2> Azuolas </h2>";
} */

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)

function printX( xx ) {

  document.querySelector('section').innerHTML += xx; //section susikureme index.html faile
}
  printX( "<p class='bg-info'>tekstas</p>" );
  printX( "antraste" );


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 100; i++) {
  printX("Antraste" + "i");
}
