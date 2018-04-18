console.log( "labas as cia" );



// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];  // tuscio masyvo kurimas

for( var i = 0;  i < 50; i++){   // uzpildome masyva nuliais:
    masyvas[i] = 0;   // i = 0, 1, 2, 3, ..., 49
}
console.log( "uzpildytas masyvas: ",   masyvas );

// 5.1  sukurti masyva naudojant FOR (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var m = [];
for ( var i=0; i < 50; i++) {
    m[i] = 1;
}
console.log(  m );

// UZDUOTIS
// pasikartoti if: patikrinti masyvo pradzia.
// jeigu pradzioje irasytas "1" - isvesti "vienas",
//  priesingu atveju - isvesti "ne vienas"

if ( m[0] ===  1 ) {
    console.log( "vienas ");
} else {
    console.log( "ne vienas ");
}




// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
