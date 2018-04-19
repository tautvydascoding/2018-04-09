console.log( "labas as cia" );

function printX(xx) {
    document.querySelector('.galerija').innerHTML += xx;
}
printX( "Labas <hr>" );
printX( "Labas <hr>" );
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

// nuotrauka - String
var nuotrauka = " <img src='11.jpg'   alt='peistukas'  width='25%'>   ";
for (var i = 0; i < 12; i++) {
    printX(  nuotrauka  );
}

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x);   spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)


function piestiEilute( ilgis ) {
    var eilute = "";
    for (var i = 0; i < ilgis ; i++) {
        eilute += "_";
    }

    console.log(  eilute  );
}
piestiEilute(50);
console.log(" Vardas  | Pavarde | Amzius   ");
piestiEilute(50);

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
