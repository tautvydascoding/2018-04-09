console.log( "labas as cia" );


console.log("labas");

// =================taisyklingas Array copy  =================
// NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// for cikla naudojant
// ================= ========= ======== ========


// UZDUOTIS

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

    // 0 UZDUOTIS  -
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.
    // rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite"
    //  arba 'atlyginimas toks pats'
    // atlyginimas += 100;  // atlyginimas = atlyginimas + 100;

    var atlyginimas = 500;
    var arPasikeite = false;

    if ( atlyginimas > 500) {
        arPasikeite = true;
    } else {
        arPasikeite = false;
    }

    // ar tiesa?    - arPasikeite yra TRUE?
    if ( arPasikeite ) {
            console.log(" Altylinimas padidejo");
    } else {
            console.log(" Altylinimas nesikeite ");
    }


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico"
//      (surasti pirmaji; sunkes- surasti visus riko)

    var ieskomasis = "Rico";
    for(var i=0; i < names.length ;  i++  ) {
        if (  ieskomasis ==  names[i]   ) {
            console.log( ieskomasis, " numeris yra: ", i);
            break;  // nutraukia FOR/While cikla
        }
    }

    // for (var i = 0; i < array.length; i++) {
    //     for (var i = 0; i < array.length; i++) {
    //         break;
    //     }
    // }

// 1B) papildyti ^: jeigu tokio vardo neranda,
//      isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

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


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve
// (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function  getStalciausNumeris( ieskomasTekstas) {
    for(var i=0; i < names.length ;  i++  ) {
        if (  ieskomasTekstas ==  names[i]   ) {
            return i;  // nutraukia funkcija (FOR/While cikla irgi)
        }
    }
    return -1;  // null
}

var nr = getStalciausNumeris('Rico-----');
console.log( "Ieskomo vardo numeris:",   nr  );

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var numeris = names.indexOf( "Freida");
console.log(    lastNames[numeris]   );

var numeris2 = getStalciausNumeris('Freida');
console.log(    lastNames[numeris2]   );

for (var i = 0; i < names.length; i++) {
    if (names[i] == 'Freida') {
        nr = i;
        break;
    }
}
console.log(    lastNames[  nr  ]   );
//

// 4) rasti visu zmoniu vardu "Rico" pavardes
//      ir jas susideti i atskira masyva
var rastosPavardes = [];
for (var i = 0; i < names.length; i++) {
    // jeigu radau 'Rico'
    if (      names[i]  == 'Rico'  ) {
        rastosPavardes.push(   lastNames[i]   );   // ideda i gala
    }
}
// pasitikrinimas
console.log(  "Visos Rico pavardes:", rastosPavardes  );

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus
// turime: numerius
// truksta: vardu

ieskomiZmones = [2, 16, 17, 18, 19, 25];

for (var i = 0; i < ieskomiZmones.length   ; i++) {
    var nr = ieskomiZmones[i];
    console.log("Vardas:" ,  names[ nr  ]  );
    console.log("Pavarde:",  lastNames[ nr  ]  );
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
