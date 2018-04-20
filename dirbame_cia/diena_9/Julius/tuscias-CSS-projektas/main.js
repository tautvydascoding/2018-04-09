console.log( "labas as cia" );


var masinos = [ 'Audi', 'BMW', 'Subaru', 'Ford'];
var spalvos = [];

//kopijavimas
var kopija = [];
for (var i = 0; i < kopija.length; i++) {
  kopija[i] = masinos[i];
}

var kopija2 = masinos.slice(0)

//splice( a, b, c, d,...)
//a - nuo kelinto
//b - kiek istrinti
// c, d,... - ka iterpti (uz 'a')

//1. iterpti "Volvo" uz 2
masinos.splice(2, 0, "Volvo");// uz antro stalciaus '0' stalciaus istrinsime ie iterpsime 'Volvo'
console.log("po iteroimo:", masinos );
//istrinti 1-ma ir 2


//2. istrinti 0-ma ir 1-tra stalciaus
masinos.splice(0, 2); // nuo 0-to skaiciaus, istrinu 2 skaicius, consolu.log( "po trinimo:", masinos );
// 3. 'replace' vietoj antra idesime "Opel"; // istriname antra stalciu i iterpem Opel

console.log( "po sukeitimo:", masinos );


// MASYVU SUJUNGIMAS I VIENA

var masinos = [ 'Audi', 'BMW', 'Subaru', 'Ford'];
var spalvos = [ 'meline', 'geltona', 'raudona', 'juoda'];

var sujungtas = spalvos.concat(masinos)
console.log(masinos);
console.log(spalvos);
console.log(sujungtas);

var kopija3 = masinos.concat(); // prie masinos masyvo pridedamas tuscias masyvas
//
var name = 'Tomas';
var pirmaRaide = name[1];
console.log ( pirmaRaide);

var ilgis = name.length;
console.log( ilgis);
