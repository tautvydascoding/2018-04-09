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
    atlyginimas += 100;  // atlyginimas = atlyginimas + 100;
    if ( atlyginimas > 500) {
      arPasikeite = true;
    } else {
      arPasikeite = false;
    }

    if (arPasikeite) {
      console.log('atlyginimas padidejo');
    } else {
      console.log('atlyginimas nesikeite');
    }


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var ieskomasis = "Piper";
var arRadau = false;
for(var i=0; i < names.length ;  i++  ) {
    if (  ieskomasis ==  names[i]   ) {
        arRadau = true;
        break;  // nutraukia FOR/While cikla
    }
}
// tikrinu ar netiesa?
// if (  !arRadau  ) {     //  !arRadau =>  arRadau == false

// tikrinu ar tiesa?
if (arRadau == false) {
    console.log(  ieskomasis, " Nepavyko rasti...Bandykite kita zodi");
} else {
    console.log( ieskomasis, " numeris yra: ", i);
}


//
// }
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)



// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)


// var numeris = name.indexOf("Freida");
// console.log( lastNames[numeris] );


var ieskomasVardas = 'Rico';

for(var i = 0; i < names.length; i++) {
  if(names[i] == ieskomasVardas) {
    console.log(lastNames[i]);
  }
}

// 4) rasti visu zmoniu vardu "Rico" pavardes ir susideti i atskira masyva
var rastosPavardes = [];
  for (var i = 0; i < names.length; i++) {
    if (names[i] == ieskomasVardas ) {
      rastosPavardes.push( lastNames[i] );
      console.log('Rico Pavardes yra: ', rastosPavardes);
    }
  }


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
//turime: numerius
//truksta: vardu ir pavardziu

var ieskomiZmones = [2, 16, 17, 18, 19, 25];

  for (var i = 0; i < ieskomiZmones.length; i++) {
      var nr = ieskomiZmones[i];
      console.log('vardas: ', names[nr] + ' pavarde: ', lastNames[nr]);

}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }