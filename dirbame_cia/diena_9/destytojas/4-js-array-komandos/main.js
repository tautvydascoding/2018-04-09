console.log( "labas as cia" );


var masinos = ['Audi', 'BMW', "Subaru", 'Ford'];
var spalvos = ['melyna', 'raudona', 'geltona', 'juoda' ];


// taisyklingas kopijavimas
var kopija = [];
for (var i = 0; i < masinos.length; i++) {
    kopija[i] = masinos[i];
}

var kopija2 = masinos.slice(0);

// splice( a, b, c, d,...)
// a - nuo kelinto
// b - kiek istrinti
// c, d, ... - ka iterpti (uz 'a')

// 1. itepti "Volvo" uz 2 stalciauas
console.log( "pries keiciant:",  masinos   );

masinos.splice(3, 0, "Volvo");  // uz antro stalciaus '0' stalciu istrinsime ir iteprisme 'Volvo'

console.log(  "po iterpimo:", masinos   );


// 2. istrinti 0-ma ir 1-tra stalciu
masinos.splice(0, 2 ); // nuo 0-to stalciaus, istrinu 2 stalcius,
console.log(  "po trynimo:", masinos   );

// 3. 'replace'   vietoj antro idesime "Opel"
masinos.splice(2, 1, "Opel");  // istrinam antra stalciu i iterpem Opel

console.log(  "po sukeitimo:", masinos   );


// MASYVU SUJUNGIMAS I VIENA

  masinos = ['Audi', 'BMW', "Subaru", 'Ford'];
  spalvos = ['melyna', 'raudona', 'geltona', 'juoda' ];

 var sujungtas = spalvos.concat( masinos );

console.log(masinos);
console.log(spalvos);
console.log(sujungtas);

var kopija3 = masinos.concat();  // prie masinos masyvo pridejom tuscia masyva
//
var name = 'Tomas';
var pirmaRaide = name[1];
console.log(  pirmaRaide  );

var ilgis = name.length;
console.log( ilgis );


// 
