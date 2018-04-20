console.log( "labas as cia" );
console.log("labas");

// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================= ========= ======== ========


// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 0 UZDUOTIS ----
    var atlyginimas = 500;
    var arPasikeite = false;
    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'
    //atlyginimas += 100;  // atlyginimas = atlyginimas + 100;


//     if ( atlyginimas > 500) {
//       arPasikeite = true;
//     } else {
//       arPasikeite = false;
//     }
//
//     if (arPasikeite) {
//       console.log("Atlyginimas pasikeite");
//       }
//     else {
//       console.log("Atlyginimas toks pat");
//     }
//
//
// // 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// var ieskomasis = "";
//
// console.log(names.indexOf(ieskomasis));
//
// for (var i = 0; i < names.length; i++) {
//   if (names[i] == ieskomasis) {
//     console.log(ieskomasis," yra",i);
//   // break;  // nutraukia cikla.
//   }
//   else if((i + 1) == names.length){
//     console.log("Tokio vardo nera, bandykite dar karta");
//   }
// }

// var arRadau = false;
//
// for (var i = 0; i < names.length; i++) {
// if (ieskomasis == names[i]) {
//   arRadau = true;
//   console.log(ieskomasis, "numeris yra: ", i);
//   break;}
// }
//
// if (arRadau == false){
//   console.log("Nepavyko rasti",ieskomasis,"....bandykite kita zodi");
// }






// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

// function  paieska(x){
//   for (var i = 0; i < names.length; i++) {
//     if(names[i] == x){
//       console.log("ieskomo vardo nr:", i);
//     }  }
// }
//
// paieska("Rico");
//
//
// function  getStalciausNumeris(ieskomasTekstas){
//   for (var i = 0; i < names.length; i++) {
//     if (ieskomasTekstas == names[i]) {
//       return i;//uzbaigia loopa ar funkcija
//     }
//   }
//   return -1;
//
// }
// var nr = getStalciausNumeris('Rico');
//
// console.log("ieskomo vardo nr: ", nr);

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)




// var vardoNR = names.indexOf("Rico");
//
// console.log(vardoNR);

// var pavarde = lastNames[vardoNR];
//
//
// console.log("ieskoma pavarde: ", lastNames[vardoNR]);


// 4) rasti visu zmoniu vardu "Rico" pavardes

vardux = "Rico";

var rastosPavardes = [];

for (var i = 0; i < names.length; i++) {
  if   (names[i] == vardux){
      console.log("vardo", vardux," pavarde prideta i masyva: ", lastNames[i]);
      rastosPavardes.push(lastNames[i]);
      }
}

console.log(rastosPavardes);


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus


 for (var i = 0; i < ieskomiZmones.length; i++) {
   var numeriukas = ieskomiZmones[i];
  console.log(numeriukas,"iraso vardas ir pavarde yra ", names[numeriukas],lastNames[numeriukas]);
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
