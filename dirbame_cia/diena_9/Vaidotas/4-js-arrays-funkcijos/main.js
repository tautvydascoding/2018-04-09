console.log( "labas as cia" );

var masinos = ["Audi", "BMW", "Subaru", "Ford"];
var spalvos = ["melyna", "raudona", "geltona", "juoda"];

console.log(masinos);

//kopijavimas

var kopija = [];

for (var i = 0; i < masinos.length; i++) {
  kopija[i] = masinos[i];
}

var kopija2 = masinos.slice(0); // atpjauna gabala nuo skaiciaus iki skaiciaus;
///////////////////////////////////////////////////////////////////////////
// splice (a, b, c, d, ......)
// a - nuo kelinto;
// b - kiek istrinti;
// c, d, e .... ka iterpi uz 'a' elemento;

// 1. iterpti "Volvo" uz 2;
console.log("pries iterpima: ",masinos);
masinos.splice(3,0,"Volvo");
console.log("po iterpimo: ", masinos);
// 2. istrinti 0-nta ir 1-ma stalcius;
masinos.splice(0,2);
console.log("po istrinimo: ", masinos);
// 3. 'replace' vietoj antro idesime "Opel";
masinos.splice(2,1,"Opel");
console.log("po idejimo: ", masinos);

// masyvu sujungimas i viena


var masinos = ["Audi", "BMW", "Subaru", "Ford"];
var spalvos = ["melyna", "raudona", "geltona", "juoda"];


var sujungtas = masinos.concat(spalvos);

console.log(sujungtas);

var kopija3 = masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat(masinos.concat())))))))))));

console.log(kopija3);
