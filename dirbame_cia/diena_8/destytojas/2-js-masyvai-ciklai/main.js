console.log( "labas as cia" );



// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];  // tuscio masyvo kurimas

for( var i = 0;  i < 50; i++){   // uzpildome masyva nuliais:
    masyvas[i] = 0;   // i = 0, 1, 2, 3, ..., 49
}
console.log( "uzpildytas masyvas: ",   masyvas );

// 5.1  sukurti masyva naudojant FOR (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var mas = [];
for ( var i=0; i < 50; i++) {
    mas[i] = 1;
}
console.log(  mas );

// UZDUOTIS
// pasikartoti if: patikrinti masyvo pradzia.
// jeigu pradzioje irasytas "1" - isvesti "vienas",
//  priesingu atveju - isvesti "ne vienas"

// if ( m[0] ===  1 ) {
//     console.log( "vienas ");
// } else {
//     console.log( "ne vienas ");
// }

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// for (var i = 0; i < mas.length; i++) {
//     // jeigu liekana nera lygi "0"
//     var liekana = i % 2 ;
//     if (  liekana != 0 ) {
//         mas[i] = 3;
//     }
// }
// console.log( "kas antras 3: ",  mas );
// arba
for (var i = 1; i < 50; i = i + 2 ) {  // i = i + 2   =>  i += 2;
    mas[i] = 3;
}
console.log( "kas antras 3: ",  mas );

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < mas.length ; i++) {
    i += 4;
    mas[i] = 9;
}
console.log( "kas penktas 9: ",  mas );

//=============bootstrap---sm-md-lg-xl (30-60m)==========
